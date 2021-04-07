<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf94988257dcf8896db7c0a57d5efe1d1
{
    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf94988257dcf8896db7c0a57d5efe1d1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf94988257dcf8896db7c0a57d5efe1d1::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf94988257dcf8896db7c0a57d5efe1d1::$classMap;

        }, null, ClassLoader::class);
    }
}