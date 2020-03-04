<?php


use Framework\Routing\Route;
use Framework\Routing\Router;

Router::addRoute(new \Framework\Routing\Route('hello', 'getHello', Route::METHOD_GET));
Router::addRoute(new \Framework\Routing\Route('hello2', 'getHello2', Route::METHOD_GET));