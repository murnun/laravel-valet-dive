<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit03e436ab6e8b39b0aa7d080179c67b44
{
    public static $files = array (
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
        '7ba3c774c30c8399e359b5ff7f3b943e' => __DIR__ . '/..' . '/tightenco/collect/src/Illuminate/Support/helpers.php',
        '971e0879671c1aa8af32d8f3912fc59f' => __DIR__ . '/..' . '/laravel/valet/cli/includes/compatibility.php',
        '608e51c614a50d39c4a90f033cbec596' => __DIR__ . '/..' . '/laravel/valet/cli/includes/facades.php',
        'ee069e88b021c1d8dcb9975e03150636' => __DIR__ . '/..' . '/laravel/valet/cli/includes/helpers.php',
    );

    public static $prefixLengthsPsr4 = array (
        'V' => 
        array (
            'Valet\\' => 6,
        ),
        'S' => 
        array (
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Component\\Process\\' => 26,
            'Symfony\\Component\\Debug\\' => 24,
            'Symfony\\Component\\Console\\' => 26,
            'Silly\\' => 6,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
        'I' => 
        array (
            'Invoker\\' => 8,
            'Interop\\Container\\' => 18,
            'Illuminate\\Contracts\\' => 21,
            'Illuminate\\Container\\' => 21,
            'Illuminate\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Valet\\' => 
        array (
            0 => __DIR__ . '/..' . '/laravel/valet/cli/Valet',
        ),
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Component\\Process\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/process',
        ),
        'Symfony\\Component\\Debug\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/debug',
        ),
        'Symfony\\Component\\Console\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/console',
        ),
        'Silly\\' => 
        array (
            0 => __DIR__ . '/..' . '/mnapoli/silly/src',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'Invoker\\' => 
        array (
            0 => __DIR__ . '/..' . '/php-di/invoker/src',
        ),
        'Interop\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/container-interop/container-interop/src/Interop/Container',
        ),
        'Illuminate\\Contracts\\' => 
        array (
            0 => __DIR__ . '/..' . '/illuminate/contracts',
        ),
        'Illuminate\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/illuminate/container',
        ),
        'Illuminate\\' => 
        array (
            0 => __DIR__ . '/..' . '/tightenco/collect/src/Illuminate',
        ),
    );

    public static $prefixesPsr0 = array (
        'H' => 
        array (
            'Httpful' => 
            array (
                0 => __DIR__ . '/..' . '/nategood/httpful/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit03e436ab6e8b39b0aa7d080179c67b44::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit03e436ab6e8b39b0aa7d080179c67b44::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit03e436ab6e8b39b0aa7d080179c67b44::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
