<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5296aff30a50709cf03166c1278f2086
{
    public static $files = array (
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
    );

    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'WebSocket\\' => 10,
        ),
        'S' => 
        array (
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Component\\Yaml\\' => 23,
            'Symfony\\Component\\Translation\\' => 30,
            'Symfony\\Component\\Filesystem\\' => 29,
            'Symfony\\Component\\EventDispatcher\\' => 34,
            'Symfony\\Component\\DependencyInjection\\' => 38,
            'Symfony\\Component\\CssSelector\\' => 30,
            'Symfony\\Component\\Console\\' => 26,
            'Symfony\\Component\\Config\\' => 25,
            'Symfony\\Component\\ClassLoader\\' => 30,
        ),
        'P' => 
        array (
            'Psr\\Container\\' => 14,
        ),
        'I' => 
        array (
            'Interop\\Container\\' => 18,
        ),
        'D' => 
        array (
            'DMore\\ChromeExtension\\' => 22,
            'DMore\\ChromeDriver\\' => 19,
        ),
        'B' => 
        array (
            'Behat\\Mink\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'WebSocket\\' => 
        array (
            0 => __DIR__ . '/..' . '/textalk/websocket/lib',
        ),
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Component\\Yaml\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/yaml',
        ),
        'Symfony\\Component\\Translation\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/translation',
        ),
        'Symfony\\Component\\Filesystem\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/filesystem',
        ),
        'Symfony\\Component\\EventDispatcher\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/event-dispatcher',
        ),
        'Symfony\\Component\\DependencyInjection\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/dependency-injection',
        ),
        'Symfony\\Component\\CssSelector\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/css-selector',
        ),
        'Symfony\\Component\\Console\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/console',
        ),
        'Symfony\\Component\\Config\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/config',
        ),
        'Symfony\\Component\\ClassLoader\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/class-loader',
        ),
        'Psr\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/container/src',
        ),
        'Interop\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/container-interop/container-interop/src/Interop/Container',
        ),
        'DMore\\ChromeExtension\\' => 
        array (
            0 => __DIR__ . '/..' . '/dmore/behat-chrome-extension/src',
        ),
        'DMore\\ChromeDriver\\' => 
        array (
            0 => __DIR__ . '/..' . '/dmore/chrome-mink-driver/src',
        ),
        'Behat\\Mink\\' => 
        array (
            0 => __DIR__ . '/..' . '/behat/mink/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'B' => 
        array (
            'Behat\\Transliterator' => 
            array (
                0 => __DIR__ . '/..' . '/behat/transliterator/src',
            ),
            'Behat\\Testwork' => 
            array (
                0 => __DIR__ . '/..' . '/behat/behat/src',
            ),
            'Behat\\MinkExtension' => 
            array (
                0 => __DIR__ . '/..' . '/behat/mink-extension/src',
            ),
            'Behat\\Gherkin' => 
            array (
                0 => __DIR__ . '/..' . '/behat/gherkin/src',
            ),
            'Behat\\Behat' => 
            array (
                0 => __DIR__ . '/..' . '/behat/behat/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5296aff30a50709cf03166c1278f2086::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5296aff30a50709cf03166c1278f2086::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit5296aff30a50709cf03166c1278f2086::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
