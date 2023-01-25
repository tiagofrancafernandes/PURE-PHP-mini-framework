<?php
declare(strict_types=1);

namespace Core\Application\Boot;

use Core\Immutable;
use Jenssegers\Blade\Blade;
use Illuminate\Config\Repository;

class Init
{
    protected ?Immutable $app = \null;

    public function __construct(string $basePath)
    {
        $this->loadFiles($basePath);
        $this->app = $this->app ?? $this->app();
    }

    /**
     * function loadFiles
     *
     * @param string $basePath
     * @return void
     */
    public function loadFiles(string $basePath): void
    {
        require_once $basePath . '/vendor/autoload.php';

        require_once __DIR__ . '/files/dot.php';
        $config = require __DIR__ . '/files/config.php';

        app()->put('config', (new Repository($config)), true);

        app()->put(
            'blade',
            new Blade(
                config('app.views'),
                config('storage.cache')
            ),
            true
        );
    }

    /**
     * function app
     *
     * @return Immutable
     */
    public static function app(): Immutable
    {
        $appClone = function(): Immutable {

            if (
                !($GLOBALS['appClone'] ?? null) || !(($GLOBALS['appClone'] ?? null) instanceof Immutable)
            ) {
                $GLOBALS['appClone'] = new Immutable();
            }

            return $GLOBALS['appClone'] ?? new Immutable();
        };

        $app = function() use($appClone) : Immutable {
            if (!($GLOBALS['app'] ?? null)) {
                $GLOBALS['app'] = $appClone();
                return $GLOBALS['app'] ?? new Immutable();
            }

            if (($GLOBALS['app'] ?? null) instanceof Immutable) {
                if (
                    !($GLOBALS['appClone'] ?? null) ||
                    !(($GLOBALS['appClone'] ?? null) instanceof Immutable)
                ) {
                    $GLOBALS['appClone'] = clone $GLOBALS['app'];
                }

                return $GLOBALS['app'] ?? new Immutable();
            }

            $GLOBALS['app'] = $appClone();
            return $GLOBALS['app'] ?? new Immutable();
        };

        return $app();
    }
}
