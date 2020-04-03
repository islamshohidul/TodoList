<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5d7637810543a29dbba415f8b6cfd665
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Todo\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Todo\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static $classMap = array (
        'Circle' => __DIR__ . '/../..' . '/circle/f2.php',
        'Cmautoload' => __DIR__ . '/../..' . '/classmap/functions.php',
        'mautoload' => __DIR__ . '/../..' . '/circle/34.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5d7637810543a29dbba415f8b6cfd665::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5d7637810543a29dbba415f8b6cfd665::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit5d7637810543a29dbba415f8b6cfd665::$classMap;

        }, null, ClassLoader::class);
    }
}