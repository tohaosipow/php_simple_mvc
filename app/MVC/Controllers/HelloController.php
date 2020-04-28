<?php


namespace App\MVC\Controllers;


use App\MVC\Models\UserModel;
use Framework\Controller;
use Framework\MysqlModel;

class HelloController extends Controller
{
    public function index($request, $city_id){
        $um = new UserModel();
        $um->create(['name' => 'Petya']);
        return $this->view('index.php', ['users' => $um->all()]);
    }

    public function method2(){

        return '<h1>Hello 2 Controller</h1>';
    }
}