<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc0dfd3c0e3dcba37d26c8c7464089f97
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'Woof\\Model\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Woof\\Model\\' => 
        array (
            0 => __DIR__ . '/../..' . '/class',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc0dfd3c0e3dcba37d26c8c7464089f97::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc0dfd3c0e3dcba37d26c8c7464089f97::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc0dfd3c0e3dcba37d26c8c7464089f97::$classMap;

        }, null, ClassLoader::class);
    }
}
