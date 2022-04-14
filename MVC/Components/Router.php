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
               echo '+';
           }

       }
    }


}