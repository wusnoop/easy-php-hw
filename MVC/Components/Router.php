<?php

class Router
{
    private $routes;
    public function __construct()
    {
        $routesPath = ROOT.'/config/routes.php';
        $this->routes = include ($routesPath);
    }
    /*
     * Return request string
     */
    private function getUri(){
        if(!empty($_SERVER['REQUEST_URI'])){
            return trim($_SERVER['REQUEST_URI'], '/');
        }

    }
    public function run()
    {
        $uri = $this->getUri();
        // Проверяем наличия запроса в routes.php
       foreach ($this->routes as $uriPattern => $path){

           if(preg_match("~$uriPattern~", $uri)){
               /*Определить какой controller
               и action обрабатывают запрос*/

               $segments = explode('/', $path);
               $controllerName = array_shift($segments).'Controller';
               $controllerName = ucfirst($controllerName);

               $actionName = 'action'. ucfirst(array_shift($segments));
               $controllerFile = ROOT.'/Controllers/'.$controllerName.'.php';
               if(file_exists($controllerFile)){
                   include_once ($controllerFile);
               }

               $controllerObject = new $controllerName;
               $result = $controllerObject-> $actionName();
               if($result != null){
                   break;
               }

           }

       }
    }


}