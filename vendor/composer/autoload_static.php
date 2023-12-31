<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7bca6a40380b650c5b1d6139da162c6b
{
    public static $prefixLengthsPsr4 = array (
        'H' => 
        array (
            'HelpClass\\HelpZac\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'HelpClass\\HelpZac\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit7bca6a40380b650c5b1d6139da162c6b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7bca6a40380b650c5b1d6139da162c6b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit7bca6a40380b650c5b1d6139da162c6b::$classMap;

        }, null, ClassLoader::class);
    }
}
