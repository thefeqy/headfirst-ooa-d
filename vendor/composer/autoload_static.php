<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit63ca391a4acf908a7c98c2b94740e79d
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit63ca391a4acf908a7c98c2b94740e79d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit63ca391a4acf908a7c98c2b94740e79d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit63ca391a4acf908a7c98c2b94740e79d::$classMap;

        }, null, ClassLoader::class);
    }
}