<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite00bf83083e8dd6bde2f1d90c70b5a1e
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Carbon_Fields\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Carbon_Fields\\' => 
        array (
            0 => __DIR__ . '/..' . '/htmlburger/carbon-fields/core',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite00bf83083e8dd6bde2f1d90c70b5a1e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite00bf83083e8dd6bde2f1d90c70b5a1e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite00bf83083e8dd6bde2f1d90c70b5a1e::$classMap;

        }, null, ClassLoader::class);
    }
}
