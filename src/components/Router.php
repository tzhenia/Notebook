<?php
/**
 * User: Yevhenii Taranukha
 * Contacts: tzhenia.com
 * Date: 3.2.18 (22:14)
 */

class Router{

    private $routes;


    public function __construct()
    {
        $routesPath = "config/routes.php";
        $this->routes = include($routesPath);
    }

    private function getURI(){
        if(!empty($_SERVER['REQUEST_URI'])){
            return trim($_SERVER['REQUEST_URI'], '/');
        }
    }


    public function run()
    {
        $uri = $this->getURI();
        echo $uri;
    }

}