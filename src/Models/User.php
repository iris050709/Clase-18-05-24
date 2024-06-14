<?php

namespace App\Models;

Class User {
    private $firstName;//SOLO SE OCUPA DENTRO DE LA CLASE
    private $lastName;

    public function __construct($firstName, $lastName){//CONSTRCUTOR, SIEMPRE SE VA A EJECUTAR EN LA CLASE User.
        $this->firstName = $firstName;
        $this->lastName =$lastName;
    }

    public function getFullName(){
        return $this->firstName .' '. $this->lastName;
    }
    public function getFullNamedos(){
        return $this->firstName .' '. $this->lastName;
    }
}