<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfd2243da617b86a60e468b9045e97f89
{
    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'atlantisgroupbv\\ormmodel\\' => 25,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'atlantisgroupbv\\ormmodel\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitfd2243da617b86a60e468b9045e97f89::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfd2243da617b86a60e468b9045e97f89::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitfd2243da617b86a60e468b9045e97f89::$classMap;

        }, null, ClassLoader::class);
    }
}
