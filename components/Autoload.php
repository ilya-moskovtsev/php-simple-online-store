<?php

function __autoload($className)
{
    $folders = [
        '/components/',
        '/models/',
    ];

    foreach ($folders as $folder) {
        $path = ROOT . $folder . $className . '.php';
        if (is_file($path)) {
            include_once $path;
        }
    }
}