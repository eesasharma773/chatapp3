<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd913eddae20eebbe7f0b6d899ef93e2a
{
    public static $files = array (
        '7b11c4dc42b3b3023073cb14e519683c' => __DIR__ . '/..' . '/ralouphie/getallheaders/src/getallheaders.php',
        'c964ee0ededf28c96ebd9db5099ef910' => __DIR__ . '/..' . '/guzzlehttp/promises/src/functions_include.php',
        'a0edc8309cc5e1d60e3047b5df6b7052' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/functions_include.php',
        '37a3dc5111fe8f707ab4c132ef1dbc62' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/functions_include.php',
    );

    public static $prefixLengthsPsr4 = array (
        'm' => 
        array (
            'models\\' => 7,
        ),
        'l' => 
        array (
            'layouts\\' => 8,
        ),
        'c' => 
        array (
            'classes\\' => 8,
        ),
        'S' => 
        array (
            'Symfony\\Component\\EventDispatcher\\' => 34,
        ),
        'P' => 
        array (
            'Psr\\Http\\Message\\' => 17,
            'Psr\\Http\\Client\\' => 16,
        ),
        'M' => 
        array (
            'Mailgun\\' => 8,
        ),
        'G' => 
        array (
            'GuzzleHttp\\Psr7\\' => 16,
            'GuzzleHttp\\Promise\\' => 19,
            'GuzzleHttp\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'models\\' => 
        array (
            0 => __DIR__ . '/../..' . '/models',
        ),
        'layouts\\' => 
        array (
            0 => __DIR__ . '/../..' . '/layouts',
        ),
        'classes\\' => 
        array (
            0 => __DIR__ . '/../..' . '/classes',
        ),
        'Symfony\\Component\\EventDispatcher\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/event-dispatcher',
        ),
        'Psr\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-message/src',
        ),
        'Psr\\Http\\Client\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-client/src',
        ),
        'Mailgun\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Mailgun',
        ),
        'GuzzleHttp\\Psr7\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/psr7/src',
        ),
        'GuzzleHttp\\Promise\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/promises/src',
        ),
        'GuzzleHttp\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/guzzle/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'M' => 
        array (
            'Mailgun\\Tests' => 
            array (
                0 => __DIR__ . '/..' . '/mailgun/mailgun-php/tests',
            ),
            'Mailgun' => 
            array (
                0 => __DIR__ . '/..' . '/mailgun/mailgun-php/src',
            ),
        ),
        'G' => 
        array (
            'Guzzle\\Tests' => 
            array (
                0 => __DIR__ . '/..' . '/guzzle/guzzle/tests',
            ),
            'Guzzle' => 
            array (
                0 => __DIR__ . '/..' . '/guzzle/guzzle/src',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd913eddae20eebbe7f0b6d899ef93e2a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd913eddae20eebbe7f0b6d899ef93e2a::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitd913eddae20eebbe7f0b6d899ef93e2a::$prefixesPsr0;
            $loader->classMap = ComposerStaticInitd913eddae20eebbe7f0b6d899ef93e2a::$classMap;

        }, null, ClassLoader::class);
    }
}
