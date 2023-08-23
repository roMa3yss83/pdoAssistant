<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbbdd30d8880c4bffb01795bfe3ff56ad
{
    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'Roma3yss83\\PdoAssistant\\' => 24,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Roma3yss83\\PdoAssistant\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitbbdd30d8880c4bffb01795bfe3ff56ad::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbbdd30d8880c4bffb01795bfe3ff56ad::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitbbdd30d8880c4bffb01795bfe3ff56ad::$classMap;

        }, null, ClassLoader::class);
    }
}
