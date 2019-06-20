<?php

use ishop\Router;

//default routes
//admin
Router::add('^admin$', ['controller' => 'Main', 'action' => 'index', 'prefix' => 'admin']);
Router::add('^admin/?(?P<controller>[a-z-]+)/?(?P<action>[a-z-]+)?$', ['prefix' => 'admin']);


//^ - метасимвол начала строки, $ - метасимвол конца строки
Router::add('^$', ['controller' => 'Main', 'action' => 'index']);
//динамическое определение контроллера и экшена
Router::add('^(?P<controller>[a-z-]+)/?(?P<action>[a-z-]+)?$');