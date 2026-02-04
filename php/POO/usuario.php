<?php

class Usuario{

    public $usuario;
    private $email;
    private $password;

    public function __construct($usuario, $email, $password) {
        $this->usuario = $usuario;
        $this->email = $email;
        $this->password = $password;

    }

    public function saludar() {

        return "Hola , soy" . $this->usuario . "y mi email es " . $this->email . ".";
    }        

}



?>