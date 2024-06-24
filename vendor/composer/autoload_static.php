<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb0ef76031850d8bc04fd91a050c425fc
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitb0ef76031850d8bc04fd91a050c425fc::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb0ef76031850d8bc04fd91a050c425fc::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb0ef76031850d8bc04fd91a050c425fc::$classMap;

        }, null, ClassLoader::class);
    }
}
