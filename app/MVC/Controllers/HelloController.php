<?php


namespace App\MVC\Controllers;


use Framework\Controller;

class HelloController extends Controller
{
    public function index($request, $city_id){
        return $this->view('index.php', ['a' => $city_id]);
    }

    public function method2(){
        return '<h1>Hello 2 Controller</h1>';
    }
}