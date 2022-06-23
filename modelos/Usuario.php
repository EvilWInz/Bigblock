<?php
class Usuario{


    private $nombreUsuario;
    private $password;
    private $aliasUsuario;

    public function Usuario($nombreUsuario, $password){
		$this->nombreUsuario=$nombreUsuario;
		$this->password=$password;
	}


    public function login(){
        $datos=new ConexionBd();
        $mysql=$datos->conectar();
        $consulta = "SELECT password FROM usuario where nombreUsuario = '$this->nombreUsuario'";
        $resultado=$mysql->query($consulta);
        
        if( $resultado = mysqli_fetch_array($resultado)){

            if ($this->password==$resultado[0]) {
     
        return true;
                
        }else{
             return false;
            }
                
        }
        

    }


}

