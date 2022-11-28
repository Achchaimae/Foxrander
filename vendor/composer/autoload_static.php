<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita724cb80161a3f2f2316c5d3de2ea5ad
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Model\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Model\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Model',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita724cb80161a3f2f2316c5d3de2ea5ad::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita724cb80161a3f2f2316c5d3de2ea5ad::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita724cb80161a3f2f2316c5d3de2ea5ad::$classMap;

        }, null, ClassLoader::class);
    }
}
