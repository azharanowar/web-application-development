<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8cfbb807b11583a485bfdbdab5c5ad4d
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit8cfbb807b11583a485bfdbdab5c5ad4d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8cfbb807b11583a485bfdbdab5c5ad4d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit8cfbb807b11583a485bfdbdab5c5ad4d::$classMap;

        }, null, ClassLoader::class);
    }
}