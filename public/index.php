<?php

require __DIR__.'/../vendor/autoload.php';//SALE DE LA CARPETA Y ENTRA A LA DE VENDOR PARA EL DESARROLLO

use App\Controllers\HomeController; //ACCEDE A LA RUTA Y TRAE HOME CONTROLLER

$controller = new HomeController();//SE ESTA INSTANCIANDO EL CONTROLLADOR

$controller->index();//DEL CONTROLADOR SE VA AL INDEX