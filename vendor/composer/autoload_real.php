<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitb3d6ae757d0a87f4800ea02950122d65
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

        spl_autoload_register(array('ComposerAutoloaderInitb3d6ae757d0a87f4800ea02950122d65', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitb3d6ae757d0a87f4800ea02950122d65', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitb3d6ae757d0a87f4800ea02950122d65::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
