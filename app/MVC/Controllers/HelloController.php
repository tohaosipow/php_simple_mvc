<?php


namespace App\MVC\Controllers;


use Framework\Controller;

class HelloController extends Controller
{
    public function index(){

        return $this->view('index.php', ['a' => 1234]);
    }

    public function method2(){
        return '<h1>Hello 2 Controller</h1>';
    }
}