<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit50006e33ad7d8a879c69f8bdab2b1e5e
{
    public static $files = array (
        '6771549705ca5229ccf0e3d73786b564' => __DIR__ . '/../..' . '/App/helpers.php',
    );

    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'Dotenv\\' => 7,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Dotenv\\' => 
        array (
            0 => __DIR__ . '/..' . '/vlucas/phpdotenv/src',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit50006e33ad7d8a879c69f8bdab2b1e5e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit50006e33ad7d8a879c69f8bdab2b1e5e::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
