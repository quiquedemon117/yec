<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5bceac2a0e4e73d4030e34eb5829bf6d
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

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5bceac2a0e4e73d4030e34eb5829bf6d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5bceac2a0e4e73d4030e34eb5829bf6d::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
