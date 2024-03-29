<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7d432392b5eee955547e320d00591ccc
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Mostafax2\\Dynamic\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Mostafax2\\Dynamic\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit7d432392b5eee955547e320d00591ccc::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7d432392b5eee955547e320d00591ccc::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit7d432392b5eee955547e320d00591ccc::$classMap;

        }, null, ClassLoader::class);
    }
}
