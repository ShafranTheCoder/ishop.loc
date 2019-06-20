<?php


namespace ishop;


class App
{
    //публичное статичное свойство контейнер (шаблон проектирование Реестр)
    public static $app;
    //метод конструктор
    public function __construct()
    {
        //получаю строку запроса url
        $query = trim($_SERVER['QUERY_STRING'], '/');
        //стартую сессию для авторизации и админки
        session_start();
        //объект реестра записываю в контейнер, в реестре храню параметры.
        self::$app = Registry::instance();
        $this->getParams();
        new ErrorHandler();
    }
    protected function getParams() {
        $params = require_once  CONF . '/params.php';
        if (!empty($params)) {
            foreach ($params as $k => $v) {
                self::$app->setProperty($k, $v);
            }
        }
    }
}