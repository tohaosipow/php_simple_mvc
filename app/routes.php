<?php


use Framework\Routing\Route;
use Framework\Routing\Router;

Router::addRoute(new \Framework\Routing\Route('hello2', 'HelloController@method2', Route::METHOD_GET));
Router::addRoute(new \Framework\Routing\Route('cities/{city_id}/streets/{street_id}', 'HelloController@index', Route::METHOD_GET));
