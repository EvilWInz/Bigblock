<?php
include("../modelos/ConexionBd.php");
include("../modelos/Usuario.php");

class ControladorUsuario{
    


    private $model;
    function login(){
        session_start();
          $this->model = new Usuario($_REQUEST['nombreUsuario'],$_REQUEST['password']);

  
    if ($this->model->login()){ 
        echo "Paso If Controller " ;
        header('Location: ../html/3inicio.html');}
    else{
        echo " no Paso If Controller " ;
        header('Location: ../html/1login.html');
    }
    }

}
$controlador = new controladorUsuario;
    call_user_func(array($controlador, "login"));
?>