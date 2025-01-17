<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit938c5583c808859b68028493b12f8cef
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Sena\\Isamaking\\' => 15,
        ),
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Sena\\Isamaking\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit938c5583c808859b68028493b12f8cef::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit938c5583c808859b68028493b12f8cef::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit938c5583c808859b68028493b12f8cef::$classMap;

        }, null, ClassLoader::class);
    }
}
