<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3f2f6a15aad384b17c883def4f825def
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
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3f2f6a15aad384b17c883def4f825def::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3f2f6a15aad384b17c883def4f825def::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
