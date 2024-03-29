<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0611c92dd9cdc9e7d19bdfda6a64c90b
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Salox\\EduPackage\\' => 17,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Salox\\EduPackage\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit0611c92dd9cdc9e7d19bdfda6a64c90b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0611c92dd9cdc9e7d19bdfda6a64c90b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit0611c92dd9cdc9e7d19bdfda6a64c90b::$classMap;

        }, null, ClassLoader::class);
    }
}
