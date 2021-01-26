<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4f7952d1bc951710da0fe3f7bdfbede0
{
    public static $prefixLengthsPsr4 = array (
        'J' => 
        array (
            'Job_Portal\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Job_Portal\\' => 
        array (
            0 => __DIR__ . '/../..' . '/source',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4f7952d1bc951710da0fe3f7bdfbede0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4f7952d1bc951710da0fe3f7bdfbede0::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
