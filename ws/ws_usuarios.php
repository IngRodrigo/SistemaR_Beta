<?php
require_once './procesos_php/Conexion.php';

function listarUsuarios(){
    $query=mysqli_query(ConexionMysqli(), "Select * from usuarios");
    while ($resultado=  mysqli_fetch_assoc($query)){
        $resultadoJson=json_encode($resultado);    
    }
    return $resultadoJson;
    
}

function comprobarUsuario($usuario, $password){
    $sql="Select * from usuarios where email='".$usuario."' and password='".$password."'";
    $query=  mysqli_query(ConexionMysqli(), $sql);
    if(!empty($query)){
            $resultado=mysqli_fetch_assoc($query);            
    }else{
        $resultado='error';
    }
    return $resultado;
    
}
