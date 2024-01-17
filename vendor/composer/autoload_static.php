<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1eb1e4441780eb82be5ad8c7125f4a1e
{
    public static $prefixLengthsPsr4 = array (
        'H' => 
        array (
            'Huuhu\\Demo\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Huuhu\\Demo\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit1eb1e4441780eb82be5ad8c7125f4a1e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1eb1e4441780eb82be5ad8c7125f4a1e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1eb1e4441780eb82be5ad8c7125f4a1e::$classMap;

        }, null, ClassLoader::class);
    }
}
