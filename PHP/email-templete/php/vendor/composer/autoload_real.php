<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitadcfe4a8f01a06c95ead00516797726f
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

        spl_autoload_register(array('ComposerAutoloaderInitadcfe4a8f01a06c95ead00516797726f', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitadcfe4a8f01a06c95ead00516797726f', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitadcfe4a8f01a06c95ead00516797726f::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
