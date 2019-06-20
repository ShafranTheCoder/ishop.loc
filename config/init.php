<?php
# режим разработки 1-разработка, 0- продакшн
define("DEBUG", 1);
# корень сайта
define("ROOT", dirname(__DIR__));
# корень публичного сайта (заканчиаются БЕЗ СЛЕША)
define("WWW", ROOT . '/public');
# путь к апп (модели, контроллеры, виды
define("APP", ROOT . '/app');
# путь к ядру
define("CORE", ROOT . '/vendor/ishop/core');
# путь к библиотекам
define("LIBS", ROOT . '/vendor/ishop/core/libs');
# путь к кешу
define("CACHE", ROOT . '/tmp/cache');
# путь к конфигам
define("CONF", ROOT . '/config');
# путь к шаблону сайту по дефолту
define("LAYOUT", 'default');

# путь к папке сайта если сайт в папке локалхоста
//http://ishop.loc/public/index.php
$app_path = "htttp://{$_SERVER['HTTP_HOST']}{$_SERVER['PHP_SELF']}";
//http://ishop.loc/public (ищем все кроме слеша с конца строки и заменяем на пустые символы
$app_path = preg_replace("#[^/]+$#", '', $app_path );
//http://ishop.loc
$app_path = str_replace('/public/', '', $app_path);
# url записываю в константу path
define("PATH", $app_path);
# константа ведет на админку сайта
define("ADMIN", PATH . '/admin');

# автозагрузщик композера
require_once ROOT . '/vendor/autoload.php';