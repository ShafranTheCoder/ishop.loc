<?php


namespace ishop;


class Router
{
    //сюда записываем имеющиеся маршруты на сайте
    protected static $routes = [];
    //сюда записываем текущий маршрут соответсвия
    protected static $route = [];
    public static function add ($regexp, $route = []){
        self::$routes[$regexp] = $route;

    }
    public static function getRoutes() {
        return self::$routes;
    }
    public static function getRoute() {
        return self::$route;
    }
    //принимает юрл и делает с ним что-то, вызывает определенный контроллер в зависимости от резалта матчроута
    public static function dispatch($url) {
        if (self::matchRoute($url)) {
            echo 'OK';
        } else {
            echo 'NO';
        }
    }
    //принимает юрл и ищет соответствие, тру или фолс
    public static function matchRoute($url) {
        return true;
    }
}