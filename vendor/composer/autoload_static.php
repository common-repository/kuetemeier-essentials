<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit65e0f81bff426dc110cde1820eaea7cb
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'MatthiasMullie\\PathConverter\\' => 29,
            'MatthiasMullie\\Minify\\' => 22,
        ),
        'K' => 
        array (
            'Kuetemeier_Essentials\\' => 22,
            'Kuetemeier\\WordPress\\' => 21,
            'Kuetemeier\\Collection\\' => 22,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'MatthiasMullie\\PathConverter\\' => 
        array (
            0 => __DIR__ . '/..' . '/matthiasmullie/path-converter/src',
        ),
        'MatthiasMullie\\Minify\\' => 
        array (
            0 => __DIR__ . '/..' . '/matthiasmullie/minify/src',
        ),
        'Kuetemeier_Essentials\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Kuetemeier\\WordPress\\' => 
        array (
            0 => __DIR__ . '/..' . '/kuetemeier/wordpress/src/Kuetemeier/WordPress',
        ),
        'Kuetemeier\\Collection\\' => 
        array (
            0 => __DIR__ . '/..' . '/kuetemeier/collection/src/Kuetemeier/Collection',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit65e0f81bff426dc110cde1820eaea7cb::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit65e0f81bff426dc110cde1820eaea7cb::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
