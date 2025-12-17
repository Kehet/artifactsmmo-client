### Artifacts MMO PHP Client — Project Guidelines

#### Build and Configuration

- Runtime: PHP 8.1+ with extensions: `curl`, `json`, `mbstring` (strictly required by `composer.json`).
- Dependency manager: Composer.
  - Install deps (dev included):
    - `composer install`
  - Autoloading: PSR-4
    - Production: `Kehet\ArtifactsMMO\` → `src/`
    - Tests: `Kehet\ArtifactsMMO\Test\` → `tests/`
- HTTP client: Guzzle 7 (no framework integration). No custom middleware configured by default.
- API configuration: set host and bearer token once per process using `Configuration`.

```php
\Kehet\ArtifactsMMO\Configuration::getDefaultConfiguration()
    ->setHost('https://api.artifactsmmo.com')
    ->setAccessToken('YOUR_TOKEN');
```

Notes specific to this repo:
- This codebase is generated from OpenAPI (see `openapi.json`, docs under `docs/`). Manual modifications under `src/Api` and `src/Model` may be overwritten if regenerated. Prefer wrappers/adapters outside generated code when adding custom behavior.

#### Testing

- Test runner: PHPUnit 9.x (dev dependency).
- Configuration: `phpunit.xml.dist`
  - Bootstrap: `vendor/autoload.php`
  - Coverage includes `src/Api` and `src/Model`.
  - Testsuites include only `./tests/Api` and `./tests/Model` by default.
- Current baseline: Generated placeholder tests exist and are marked incomplete/skipped; they make no assertions. That’s expected for OpenAPI-generated clients without live API fixtures.

Run all tests (as configured):
- `./vendor/bin/phpunit -c phpunit.xml.dist`

Run a specific test file (bypasses testsuite directories):
- `./vendor/bin/phpunit tests/Smoke/EnvironmentTest.php`

Run by name filter (class or method):
- `./vendor/bin/phpunit -c phpunit.xml.dist --filter YourTestOrMethodName`

Add a new test
- Namespace tests under `Kehet\ArtifactsMMO\Test\...` (autoload-dev).
- Place tests under `tests/Api` or `tests/Model` to be picked up by the configured testsuite, or run them explicitly by path if you use a different folder (e.g., `tests/Smoke`).

Example minimal smoke test (verified locally)

This test asserts Composer autoloading works and that an API class can be instantiated without performing network I/O.

```php
<?php
declare(strict_types=1);

namespace Kehet\ArtifactsMMO\Test\Smoke;

use GuzzleHttp\Client;
use Kehet\ArtifactsMMO\Api\ItemsApi;
use PHPUnit\Framework\TestCase;

final class EnvironmentTest extends TestCase
{
    public function testAutoloadAndBasicApiInstantiation(): void
    {
        $client = new Client();
        $api = new ItemsApi($client);
        $this->assertInstanceOf(ItemsApi::class, $api);
    }
}
```

How we verified it
- Installed dependencies: `composer install`
- Executed: `./vendor/bin/phpunit tests/Smoke/EnvironmentTest.php`
- Result: `OK (1 test, 1 assertion)`

Mocking HTTP for unit tests (recommended)
- Use Guzzle’s `MockHandler` to avoid real HTTP calls in tests:

```php
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use GuzzleHttp\Client;

$mock = new MockHandler([
    new Response(200, ['Content-Type' => 'application/json'], '{"ok":true}')
]);
$handlerStack = HandlerStack::create($mock);
$client = new Client(['handler' => $handlerStack]);
// pass $client to an Api class
```

CI and test selection guidance
- Because generated tests are incomplete, add targeted unit tests around your integrations or wrappers to achieve meaningful coverage. Keep network isolated behind Guzzle with mocked handlers.
- If you need the test suite to pick up new directories (e.g., `tests/Smoke`), add another `<directory>` entry to `phpunit.xml.dist` under the existing `<testsuite>`.

#### Linting and Code Style

- Linting: `overtrue/phplint` is wired as Composer script.
  - Run: `composer test` (executes `@phplint`) or `composer phplint`
- Code style: `friendsofphp/php-cs-fixer` is available but not configured in Composer scripts. If your environment includes a `.php-cs-fixer.php` config, you can run:
  - `./vendor/bin/php-cs-fixer fix --diff`
  - No config is committed here by default; align with your team’s standards before enforcing.

#### Development Tips Specific to This Client

- Token/host config is global via `Configuration::getDefaultConfiguration()`. In long-lived processes/tests, isolate config between tests to avoid cross-test leakage (reset or use separate processes when necessary).
- Exceptions: API errors throw `\Kehet\ArtifactsMMO\ApiException`. Catch and inspect `$e->getResponseObject()` for typed error payloads when available.
- Regeneration risk: If you regenerate code from the OpenAPI spec (`openapi.json`), custom changes under `src/Api` and `src/Model` will be overwritten. Prefer extension points:
  - Add utility services under `src/` outside generated packages.
  - Wrap API classes for higher-level flows rather than patching generated methods.
- HTTP timeouts/retries: Not configured by default. Provide a preconfigured `GuzzleHttp\Client` with timeouts and retry middleware for production use.

#### Quickstart Command Summary (verified)

- Install: `composer install`
- Run entire suite: `./vendor/bin/phpunit -c phpunit.xml.dist`
- Run one file: `./vendor/bin/phpunit tests/Smoke/EnvironmentTest.php`
- Lint: `composer phplint`

Cleanup note for this documentation task
- A temporary smoke test (`tests/Smoke/EnvironmentTest.php`) was created to verify documentation steps, executed successfully, and then removed to keep the repository unchanged except for this guideline file.
