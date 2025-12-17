<?php
declare(strict_types=1);

namespace Kehet\ArtifactsMMO\Test\Util;

use InvalidArgumentException;
use Kehet\ArtifactsMMO\Util\Unpaginate;
use PHPUnit\Framework\TestCase;

final class UnpaginateTest extends TestCase
{
    private function makePage(array $data, int $page, int $pages): object
    {
        return new class($data, $page, $pages) {
            /** @var array<int, mixed> */ private array $data;
            private int $page; private int $pages;
            public function __construct(array $data, int $page, int $pages) { $this->data = $data; $this->page = $page; $this->pages = $pages; }
            /** @return array<int, mixed> */ public function getData(): array { return $this->data; }
            public function getPage(): int { return $this->page; }
            public function getPages(): int { return $this->pages; }
        };
    }

    public function testIteratesAcrossMultiplePages(): void
    {
        $pages = [
            $this->makePage(['a', 'b'], 1, 3),
            $this->makePage(['c'], 2, 3),
            $this->makePage(['d', 'e'], 3, 3),
        ];

        $fetchCalls = 0;
        $fetcher = function (int $page) use (&$fetchCalls, $pages) {
            $fetchCalls++;
            return $pages[$page - 1] ?? $this->makePage([], $page, $page);
        };

        $all = iterator_to_array(Unpaginate::iterate($fetcher, startPage: 1), preserve_keys: false);

        $this->assertSame(['a','b','c','d','e'], $all);
        $this->assertSame(3, $fetchCalls);
    }

    public function testStopsOnEmptyFirstPage(): void
    {
        $fetcher = function (int $page) {
            return $this->makePage([], $page, $page);
        };

        $all = Unpaginate::collect($fetcher);
        $this->assertSame([], $all);
    }

    public function testValidatesResponseShape(): void
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('Page response must implement getData()');

        $badResponse = new class {
            // missing required methods
        };

        $fetcher = fn (int $page) => $badResponse;
        iterator_to_array(Unpaginate::iterate($fetcher));
    }

    public function testGuardsParameters(): void
    {
        $dummy = fn (int $p, int $s) => $this->makePage([], $p, $p);

        $this->expectException(InvalidArgumentException::class);
        Unpaginate::collect($dummy, startPage: 0);
    }
}
