<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9166b659dc2a2b6318df6455de83af2a
{
    public static $prefixLengthsPsr4 = array (
        'h' => 
        array (
            'houdunwang\\arr\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'houdunwang\\arr\\' => 
        array (
            0 => __DIR__ . '/..' . '/houdunwang/arr/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9166b659dc2a2b6318df6455de83af2a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9166b659dc2a2b6318df6455de83af2a::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}