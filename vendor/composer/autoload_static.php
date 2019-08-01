<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2e05160a0e97fab69a127413b3d4b624
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Models\\' => 7,
        ),
        'C' => 
        array (
            'Core\\' => 5,
            'Controllers\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Models\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Models',
        ),
        'Core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Core',
        ),
        'Controllers\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Controllers',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2e05160a0e97fab69a127413b3d4b624::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2e05160a0e97fab69a127413b3d4b624::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}