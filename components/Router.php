<?php

class Router {

    private $routes;

    public function __construct() {
        $routesPath = ROOT . '/config/routes.php';
        //echo $routesPath . '<br>';
        $this->routes = include ($routesPath);
    }

    /**
     * Returns request string
     * @return string
     */
    private function getURI() {
        if (!empty($_SERVER['REQUEST_URI'])) {
            return trim($_SERVER['REQUEST_URI'], '/');
        }
    }

    public function run() {

        //Получить строку запроса

        $uri = $this->getURI();

//        Проверить наличие такого запроса в routes.php
        foreach ($this->routes as $uriPattern => $path) {

            //Сравниваем $uriPattern и $uri
            if (preg_match("~$uriPattern~", $uri)) {

                //Получаем внутренний путь
                $iternalRoute = preg_replace("~$uriPattern~", $path, $uri);
                //Определение controller-a, action-a и параметр-ы
                $segments = explode('/', $iternalRoute);

                $controllerName = ucfirst(array_shift($segments) . "Controller");
                $actionName = 'action' . ucfirst(array_shift($segments));
                $parametres = $segments;

                //Подключить файл класса контроллера
                $controllerFile = ROOT . '/controllers/' . $controllerName . '.php';
                //echo $controllerFile;
                if (file_exists($controllerFile)) {
                    include_once ($controllerFile);
                }

                //Создать объект,вызвать метод action

                $controllerObject = new $controllerName;
                $result = call_user_func_array(array($controllerObject, $actionName), $parametres);
                if ($result != null) {
                    break;
                }
            }
        }
    }

}
