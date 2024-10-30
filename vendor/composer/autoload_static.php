<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1d715be1d16d757b1b063b4998529d5b
{
    public static $prefixLengthsPsr4 = array (
        'e' => 
        array (
            'enshrined\\svgSanitize\\' => 22,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'enshrined\\svgSanitize\\' => 
        array (
            0 => __DIR__ . '/..' . '/enshrined/svg-sanitize/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1d715be1d16d757b1b063b4998529d5b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1d715be1d16d757b1b063b4998529d5b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1d715be1d16d757b1b063b4998529d5b::$classMap;

        }, null, ClassLoader::class);
    }
}
