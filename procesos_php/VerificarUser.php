<?php
require_once './ws/ws_usuarios.php';

function verificarDatos(){
    if(isset($_POST['email']) && isset($_POST['password'])){
    $usuario=$_POST['email'];
    $password=$_POST['password'];
    $request=comprobarUsuario($usuario, $password);
    if(!empty($request)){
        $_SESSION['datos']=$request;
        $logueo=$_SESSION['datos'];
    }else{
        echo 'Error';
        echo $request;
        
    }
    return $logueo;
}
}
function sesion(){
      if(!isset($_SESSION['datos'])){
          session_start();
      }
      return true;
}
function verificar($usuario, $password){
    
    $DatosUsuario = acceder($usuario, $password);
    if(!empty($DatosUsuario)){
    session_start();
    $_SESSION['logueo']=$nombreUser = $usuario['nombre'] . ' ' . $usuario['apellidos'];
    }
    return $nombreUser;
//header("Location: login.html");
    }
    
    ?>