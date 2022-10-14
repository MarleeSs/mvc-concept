<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitdd5e01f4b7bc401fd286b3502b8d43ff
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

        require __DIR__ . '/platform_check.php';

        spl_autoload_register(array('ComposerAutoloaderInitdd5e01f4b7bc401fd286b3502b8d43ff', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitdd5e01f4b7bc401fd286b3502b8d43ff', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitdd5e01f4b7bc401fd286b3502b8d43ff::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}