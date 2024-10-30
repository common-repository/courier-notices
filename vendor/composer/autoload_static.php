<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit96c1c239c93edede32e0b2943ebe06cd
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'CourierNotices\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'CourierNotices\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'P' => 
        array (
            'Parsedown' => 
            array (
                0 => __DIR__ . '/..' . '/erusev/parsedown',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit96c1c239c93edede32e0b2943ebe06cd::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit96c1c239c93edede32e0b2943ebe06cd::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit96c1c239c93edede32e0b2943ebe06cd::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit96c1c239c93edede32e0b2943ebe06cd::$classMap;

        }, null, ClassLoader::class);
    }
}
