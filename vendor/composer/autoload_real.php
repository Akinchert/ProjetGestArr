<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit8ecb43f3d23b5d98dbedf8f8ceb30abd
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

        spl_autoload_register(array('ComposerAutoloaderInit8ecb43f3d23b5d98dbedf8f8ceb30abd', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit8ecb43f3d23b5d98dbedf8f8ceb30abd', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit8ecb43f3d23b5d98dbedf8f8ceb30abd::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
