<?php


namespace ishop;


class Registry
{
    //патерн Синглтон( только 1 экземпляр) + вставляем код трейта
    use TSingletone;

    //сюда складываю все свойства
    protected static $properties = [];

    //сеттер кладет в массив
    public function setProperty($name, $value){
        //обращение к текущему свойству. кладу в нейм значение
        self::$properties[$name] = $value;

    }
    //геттер берет значения + получаю свойство
    public function getProperty($name) {
        // если существует, то возвращаю
        if (isset(self::$properties[$name])) {
            return self::$properties[$name];
        }
        return null;
    }
    //распечатывает все существующие пропертис
    public function getProperties() {
        return self::$properties;
    }

}