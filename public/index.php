<?php

# выходим из текущей папки и образаемся к папке конфиг и файлу инитпхп
require_once dirname(__DIR__) . '/config/init.php';
require_once LIBS . '/functions.php';

//создание экземпляра класса
new \ishop\App();
debug(\ishop\App::$app->getProperties());

throw new Exception('Straniza ne naidena', 404);