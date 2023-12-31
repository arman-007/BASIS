<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1b908a5c0b47ad1e92c48b83a824e742
{
    public static $prefixLengthsPsr4 = array (
        'B' => 
        array (
            'Bitm\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Bitm\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit1b908a5c0b47ad1e92c48b83a824e742::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1b908a5c0b47ad1e92c48b83a824e742::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1b908a5c0b47ad1e92c48b83a824e742::$classMap;

        }, null, ClassLoader::class);
    }
}
