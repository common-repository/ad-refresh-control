<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit30672f746132b4b41d4f5253fde55012
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'AdRefreshControl\\' => 17,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'AdRefreshControl\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes/classes',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit30672f746132b4b41d4f5253fde55012::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit30672f746132b4b41d4f5253fde55012::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit30672f746132b4b41d4f5253fde55012::$classMap;

        }, null, ClassLoader::class);
    }
}
