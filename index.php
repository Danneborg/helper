<?php

//Front controller
// 1. Общие настройки  
ini_set('display_errors', 1);

error_reporting(E_ALL);
// 2. Подключение файлов системы
define('ROOT', dirname(__FILE__));
require_once ROOT.'/components/Router.php';

// 3. Установление соединения с БД

// 4. Подключение роутера

    $router = new Router();
    $router->run();