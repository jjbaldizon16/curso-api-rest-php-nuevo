<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita91771ca49e52fa9e4871339b74fed8b
{
    public static $prefixesPsr0 = array (
        'S' => 
        array (
            'Slim' => 
            array (
                0 => __DIR__ . '/..' . '/slim/slim',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInita91771ca49e52fa9e4871339b74fed8b::$prefixesPsr0;
            $loader->classMap = ComposerStaticInita91771ca49e52fa9e4871339b74fed8b::$classMap;

        }, null, ClassLoader::class);
    }
}
