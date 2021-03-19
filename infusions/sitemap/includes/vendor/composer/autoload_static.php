<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3552e400000102a45db0b52e229c3aab
{
    public static $prefixLengthsPsr4 = array (
        's' => 
        array (
            'samdark\\sitemap\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'samdark\\sitemap\\' => 
        array (
            0 => __DIR__ . '/..' . '/samdark/sitemap',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3552e400000102a45db0b52e229c3aab::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3552e400000102a45db0b52e229c3aab::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit3552e400000102a45db0b52e229c3aab::$classMap;

        }, null, ClassLoader::class);
    }
}