<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3d16e8ad39cf559ef1e5ef56ad7f6626
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'WpMailCatcher\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'WpMailCatcher\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit3d16e8ad39cf559ef1e5ef56ad7f6626::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3d16e8ad39cf559ef1e5ef56ad7f6626::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit3d16e8ad39cf559ef1e5ef56ad7f6626::$classMap;

        }, null, ClassLoader::class);
    }
}