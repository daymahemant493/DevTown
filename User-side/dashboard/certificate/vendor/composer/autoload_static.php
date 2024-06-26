<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcfb6280bc640103404a598c375379029
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitcfb6280bc640103404a598c375379029::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitcfb6280bc640103404a598c375379029::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitcfb6280bc640103404a598c375379029::$classMap;

        }, null, ClassLoader::class);
    }
}
