<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite954c55bcc72ced8563750dbfb052caa
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite954c55bcc72ced8563750dbfb052caa::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite954c55bcc72ced8563750dbfb052caa::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
