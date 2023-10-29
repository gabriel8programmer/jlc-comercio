<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9c944151c5b3a80cfe31e3e038b1e186
{
    public static $files = array (
        '501d3dfe1b1b0ec56a7ee7bc402fc6d8' => __DIR__ . '/../..' . '/app/config.php',
        '7470dd889e654b49996f09f3a4597ca5' => __DIR__ . '/../..' . '/app/helpers/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'j' => 
        array (
            'jlc_comercio\\System\\' => 20,
            'jlc_comercio\\Models\\' => 20,
            'jlc_comercio\\Controllers\\' => 25,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
        'M' => 
        array (
            'Monolog\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'jlc_comercio\\System\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/system',
        ),
        'jlc_comercio\\Models\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/models',
        ),
        'jlc_comercio\\Controllers\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/controllers',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/src',
        ),
        'Monolog\\' => 
        array (
            0 => __DIR__ . '/..' . '/monolog/monolog/src/Monolog',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9c944151c5b3a80cfe31e3e038b1e186::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9c944151c5b3a80cfe31e3e038b1e186::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit9c944151c5b3a80cfe31e3e038b1e186::$classMap;

        }, null, ClassLoader::class);
    }
}
