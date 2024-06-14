<?php

namespace App\Controllers;

Class HomeController{

    public function index(){
        $user = new \App\Models\User('Iris','Cruz');//GENERAR UN NUEVO USUARIO BASADO SOBRE UN MODELO
        require __DIR__.'/../Views/home.php';
    }
}