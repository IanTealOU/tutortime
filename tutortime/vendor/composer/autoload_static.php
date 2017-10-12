<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4596bca168ba35ec9736d78c76847395
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Tests\\' => 6,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Tests\\' => 
        array (
            0 => __DIR__ . '/../..' . '/tests',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'App\\Console\\Kernel' => __DIR__ . '/../..' . '/app/Console/Kernel.php',
        'App\\Exceptions\\Handler' => __DIR__ . '/../..' . '/app/Exceptions/Handler.php',
        'App\\Http\\Controllers\\Auth\\ForgotPasswordController' => __DIR__ . '/../..' . '/app/Http/Controllers/Auth/ForgotPasswordController.php',
        'App\\Http\\Controllers\\Auth\\LoginController' => __DIR__ . '/../..' . '/app/Http/Controllers/Auth/LoginController.php',
        'App\\Http\\Controllers\\Auth\\RegisterController' => __DIR__ . '/../..' . '/app/Http/Controllers/Auth/RegisterController.php',
        'App\\Http\\Controllers\\Auth\\ResetPasswordController' => __DIR__ . '/../..' . '/app/Http/Controllers/Auth/ResetPasswordController.php',
        'App\\Http\\Controllers\\Controller' => __DIR__ . '/../..' . '/app/Http/Controllers/Controller.php',
        'App\\Http\\Kernel' => __DIR__ . '/../..' . '/app/Http/Kernel.php',
        'App\\Http\\Middleware\\EncryptCookies' => __DIR__ . '/../..' . '/app/Http/Middleware/EncryptCookies.php',
        'App\\Http\\Middleware\\RedirectIfAuthenticated' => __DIR__ . '/../..' . '/app/Http/Middleware/RedirectIfAuthenticated.php',
        'App\\Http\\Middleware\\TrimStrings' => __DIR__ . '/../..' . '/app/Http/Middleware/TrimStrings.php',
        'App\\Http\\Middleware\\TrustProxies' => __DIR__ . '/../..' . '/app/Http/Middleware/TrustProxies.php',
        'App\\Http\\Middleware\\VerifyCsrfToken' => __DIR__ . '/../..' . '/app/Http/Middleware/VerifyCsrfToken.php',
        'App\\Providers\\AppServiceProvider' => __DIR__ . '/../..' . '/app/Providers/AppServiceProvider.php',
        'App\\Providers\\AuthServiceProvider' => __DIR__ . '/../..' . '/app/Providers/AuthServiceProvider.php',
        'App\\Providers\\BroadcastServiceProvider' => __DIR__ . '/../..' . '/app/Providers/BroadcastServiceProvider.php',
        'App\\Providers\\EventServiceProvider' => __DIR__ . '/../..' . '/app/Providers/EventServiceProvider.php',
        'App\\Providers\\RouteServiceProvider' => __DIR__ . '/../..' . '/app/Providers/RouteServiceProvider.php',
        'App\\user' => __DIR__ . '/../..' . '/app/users.php',
        'DatabaseSeeder' => __DIR__ . '/../..' . '/database/seeds/DatabaseSeeder.php',
        'Tests\\CreatesApplication' => __DIR__ . '/../..' . '/tests/CreatesApplication.php',
        'Tests\\Feature\\ExampleTest' => __DIR__ . '/../..' . '/tests/Feature/ExampleTest.php',
        'Tests\\TestCase' => __DIR__ . '/../..' . '/tests/TestCase.php',
        'Tests\\Unit\\ExampleTest' => __DIR__ . '/../..' . '/tests/Unit/ExampleTest.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4596bca168ba35ec9736d78c76847395::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4596bca168ba35ec9736d78c76847395::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit4596bca168ba35ec9736d78c76847395::$classMap;

        }, null, ClassLoader::class);
    }
}
