<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit1f3539c06188665c6fb4a2fbaa1a3bda
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInit1f3539c06188665c6fb4a2fbaa1a3bda', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit1f3539c06188665c6fb4a2fbaa1a3bda', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit1f3539c06188665c6fb4a2fbaa1a3bda::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}