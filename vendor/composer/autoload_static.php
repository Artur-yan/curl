<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit68de902b7f0b13b885d6a4910eb11312
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/content',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit68de902b7f0b13b885d6a4910eb11312::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit68de902b7f0b13b885d6a4910eb11312::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
