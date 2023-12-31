<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit26ddb5c6c170397d03b9f441882f004a
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Models\\' => 7,
        ),
        'C' => 
        array (
            'Controllers\\' => 12,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Models\\' => 
        array (
            0 => __DIR__ . '/../..' . '/models',
        ),
        'Controllers\\' => 
        array (
            0 => __DIR__ . '/../..' . '/controllers',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/config',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit26ddb5c6c170397d03b9f441882f004a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit26ddb5c6c170397d03b9f441882f004a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit26ddb5c6c170397d03b9f441882f004a::$classMap;

        }, null, ClassLoader::class);
    }
}
