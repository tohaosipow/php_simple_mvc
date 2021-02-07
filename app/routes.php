<?php


use Framework\Routing\Route;
use Framework\Routing\Router;

Router::addRoute(new Route('todos', 'TodosController@index', Route::METHOD_GET));
Router::addRoute(new Route('todos/create', 'TodosController@store', Route::METHOD_POST));
Router::addRoute(new Route('todos/{task_id}/complete', 'TodosController@complete', Route::METHOD_POST));
