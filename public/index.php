<?php

# выходим из текущей папки и образаемся к папке конфиг и файлу инитпхп
require_once dirname(__DIR__) . '/config/init.php';
require_once LIBS . '/functions.php';
require_once CONF . '/routes.php';

//создание экземпляра класса
new \ishop\App();