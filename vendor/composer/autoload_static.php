<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc6b0e70f840b6ddd9e79aa1e124cbe92
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'MVC\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'MVC\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'MVC\\Config\\Database' => __DIR__ . '/../..' . '/Config/Database.php',
        'MVC\\Controllers\\TasksController' => __DIR__ . '/../..' . '/Controllers/TasksController.php',
        'MVC\\Core\\Controller' => __DIR__ . '/../..' . '/Core/Controller.php',
        'MVC\\Core\\Model' => __DIR__ . '/../..' . '/Core/Model.php',
        'MVC\\Dispatcher' => __DIR__ . '/../..' . '/Dispatcher.php',
        'MVC\\Models\\Task' => __DIR__ . '/../..' . '/Models/Task.php',
        'MVC\\Request' => __DIR__ . '/../..' . '/Request.php',
        'MVC\\Router' => __DIR__ . '/../..' . '/Router.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc6b0e70f840b6ddd9e79aa1e124cbe92::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc6b0e70f840b6ddd9e79aa1e124cbe92::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc6b0e70f840b6ddd9e79aa1e124cbe92::$classMap;

        }, null, ClassLoader::class);
    }
}