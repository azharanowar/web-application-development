<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticIniteb8cfc9e1d3d57e601736953c20f5740
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
            $loader->prefixLengthsPsr4 = ComposerStaticIniteb8cfc9e1d3d57e601736953c20f5740::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticIniteb8cfc9e1d3d57e601736953c20f5740::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticIniteb8cfc9e1d3d57e601736953c20f5740::$classMap;

        }, null, ClassLoader::class);
    }
}
