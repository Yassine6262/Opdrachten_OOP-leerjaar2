<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfe15f123b38e110440343d62f203b167
{
    public static $prefixLengthsPsr4 = array (
        'G' => 
        array (
            'Gebruiker\\Opdracht6Oop\\' => 23,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Gebruiker\\Opdracht6Oop\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitfe15f123b38e110440343d62f203b167::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfe15f123b38e110440343d62f203b167::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitfe15f123b38e110440343d62f203b167::$classMap;

        }, null, ClassLoader::class);
    }
}
