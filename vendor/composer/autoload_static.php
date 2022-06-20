<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit446678a5ca206602f3e9dd0ee642773d
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit446678a5ca206602f3e9dd0ee642773d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit446678a5ca206602f3e9dd0ee642773d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit446678a5ca206602f3e9dd0ee642773d::$classMap;

        }, null, ClassLoader::class);
    }
}