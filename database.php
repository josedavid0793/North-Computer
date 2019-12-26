<?php

class Database extends PDO{
    
    public function __construct() {
        
        try {
            parent::__construct('mysql:host=localhost;dbname=miah_pasteleria', 'root', '');
            parent::setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->exec("set names utf8");
        } catch (Exception $ex) {
            die('Error al conectar a la base de datos, error: <br><br>' . $ex);
        }
        
    }
    
}