<?php

class Conexion {
    static public function conectar(){
    
        $db = new PDO("mysql:host=localhost;dbname=bartender",'root','');
        return $db;
    }
}