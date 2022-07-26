<?php

class Conexion{
    #atributos que son propios del objeto
    private $servidor = "localhost";
    private $port = "3306";
    private $database = "repositorio";
    private $usuario = "root";
    private $pass = "";
    private $conexion;#objeto de tipo pdo, de la clase propia de php
   
    public function __construct(){
        try{
            $this->conexion = new PDO("mysql:host=$this->servidor;port=$this->port;dbname=$this->database;user=$this->usuario;password=$this->pass");
            #ACTIVAMOS LOS ERRORES Y LAS EXCEPTIONES
            $this->conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

        }catch(PDOException $e){
            return "Falla de Conexión".$e;
        }
    }

    #creo un metodo de ejecucion a sql de insert, update, delete   
    public function ejecutar($sql){
        #Execute una consulta de sql
        $this->conexion->exec($sql);
    }
    
    public function consultar($sql){ # select 
        #ejecuta la consulta y nos devuelve la info de la base
        $sentencia = $this->conexion->prepare($sql);
        $sentencia->execute();
        #retorna todos los registros de la consulta sql
        return $sentencia->fetchAll();
    }
}

?>