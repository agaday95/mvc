<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5ee39f104e1bc438a93c89a8407ee58d
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'MVC\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'MVC\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5ee39f104e1bc438a93c89a8407ee58d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5ee39f104e1bc438a93c89a8407ee58d::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
