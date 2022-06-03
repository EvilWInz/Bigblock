<?php
class ConexionBd{
    private $host="localhost";
    private $user="root";
    private $password="";
    private $dbName="bigblock";


  
  public  function conectar(){
    $mysql = new mysqli($this->host,$this->user,$this->password,$this->dbName);
    if ($mysql->connect_error)
        die('Problemas con la conexion a la base de datos');

    return $mysql;
}

    



}

?>