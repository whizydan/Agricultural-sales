<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3a4979e6d13d7cd228935f33d7d3419c
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Safaricom\\Mpesa\\' => 16,
        ),
        'K' => 
        array (
            'Kabangi\\Mpesa\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Safaricom\\Mpesa\\' => 
        array (
            0 => __DIR__ . '/..' . '/safaricom/mpesa/src',
        ),
        'Kabangi\\Mpesa\\' => 
        array (
            0 => __DIR__ . '/..' . '/kabangi/mpesa/src/Mpesa',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3a4979e6d13d7cd228935f33d7d3419c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3a4979e6d13d7cd228935f33d7d3419c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit3a4979e6d13d7cd228935f33d7d3419c::$classMap;

        }, null, ClassLoader::class);
    }
}
