<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd42543a82096ac59b52adced688a4d85
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
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd42543a82096ac59b52adced688a4d85::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd42543a82096ac59b52adced688a4d85::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
