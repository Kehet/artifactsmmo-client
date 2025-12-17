<?php

declare(strict_types=1);

namespace Kehet\ArtifactsMMO\Util;

use Generator;
use InvalidArgumentException;

/**
 * Unpaginate helper to lazily iterate over paginated API responses
 *
 * This works with any generated DataPage* model that exposes:
 *  - getData(): array
 *  - getPage(): int|null
 *  - getPages(): int|null
 *
 * Usage example (ItemsApi):
 *
 * $items = iterator_to_array(Unpaginate::iterate(
 *     fn (int $page) => $itemsApi->getAllItemsItemsGet(
 *         name: null,
 *         min_level: null,
 *         max_level: null,
 *         type: null,
 *         craft_skill: null,
 *         craft_material: null,
 *         page: $page,
 *         size: 100,
 *     ),
 *     startPage: 1,
 *     sleepSeconds: 1
 *));
 */
class Unpaginate
{
    /**
     * Iterate all items across pages lazily.
     *
     * @param callable $pageFetcher A function with signature: fn(int $page): object
     *                              returning a DataPage* model (must have getData(), getPage(), getPages()).
     * @param int $startPage First page to request (API defaults are usually 1)
     * @param float $sleepSeconds Optional delay in seconds (can be fractional) to sleep between page requests
     * @return Generator<mixed>
     */
    public static function iterate(callable $pageFetcher, int $startPage = 1, float $sleepSeconds = 0.0): Generator
    {
        if ($startPage < 1) {
            throw new InvalidArgumentException('startPage must be >= 1');
        }

        if ($sleepSeconds < 0) {
            throw new InvalidArgumentException('sleepSeconds must be >= 0');
        }

        $page = $startPage;
        $safety = 0;
        $maxSafety = 100000; // hard stop to avoid infinite loops if server returns inconsistent paging

        while (true) {
            /** @var object $response */
            $response = $pageFetcher($page);

            // Validate required methods exist on the response model
            foreach ([
                         'getData',
                         'getPage',
                         'getPages',
                     ] as $method) {
                if (!method_exists($response, $method)) {
                    throw new InvalidArgumentException(
                        sprintf('Page response must implement %s()', $method)
                    );
                }
            }

            /** @var array<int, mixed>|null $data */
            $data = $response->getData();
            $currentPage = (int)($response->getPage() ?? $page);
            $totalPages = (int)($response->getPages() ?? $page);

            if (empty($data)) {
                // No more items
                break;
            }

            foreach ($data as $item) {
                yield $item;
            }

            // Stop if we've reached the last page
            if ($currentPage >= $totalPages) {
                break;
            }

            $page = $currentPage + 1;

            // Optional delay between subsequent API calls
            if ($sleepSeconds > 0.0) {
                // usleep expects microseconds as int
                $micros = (int)round($sleepSeconds * 1_000_000);
                if ($micros > 0) {
                    usleep($micros);
                }
            }

            if (++$safety > $maxSafety) {
                throw new InvalidArgumentException('Exceeded maximum number of pagination iterations');
            }
        }
    }

    /**
     * Collect all items across pages into an array.
     *
     * @param callable $pageFetcher fn(int $page): object
     * @param int $startPage
     * @param float $sleepSeconds Optional delay in seconds (can be fractional) to sleep between page requests
     * @return array<int, mixed>
     */
    public static function collect(callable $pageFetcher, int $startPage = 1, float $sleepSeconds = 0.0): array
    {
        $all = [];

        foreach (self::iterate($pageFetcher, $startPage, $sleepSeconds) as $item) {
            $all[] = $item;
        }

        return $all;
    }
}
