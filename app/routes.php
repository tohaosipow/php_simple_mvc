<?php


use Framework\Routing\Route;
use Framework\Routing\Router;

Router::addRoute(new \Framework\Routing\Route('todos', 'TodosController@index', Route::METHOD_GET));
Router::addRoute(new \Framework\Routing\Route('todos/create', 'TodosController@store', Route::METHOD_POST));
Router::addRoute(new \Framework\Routing\Route('todos/{task_id}/complete', 'TodosController@complete', Route::METHOD_POST));
