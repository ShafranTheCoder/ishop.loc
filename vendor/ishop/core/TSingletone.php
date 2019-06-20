<?php


namespace ishop;


trait TSingletone
{
    //свойство
    private static $instance;
    //метод
    public static function instance() {
        //если свойство текущего класса пустое, то мы кладем объект данного класса и вернем его
        if (self::$instance === null) {
            self::$instance = new self;
        }
        return self::$instance;
    }
}