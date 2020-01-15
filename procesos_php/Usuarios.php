<?php

require_once 'Conexion.php';

if (isset($_POST['email']) && isset($_POST['password'])) {
    $usuario = $_POST['email'];
    $password = $_POST['password'];
    acceder($usuario, $password);
} else {
    header("Refresh:0; URL=login.html");
}

function acceder($usuario, $password) {
$logueo=false;
    try {
        $select = obtenerConexion()->prepare("SELECT * FROM usuarios WHERE email='" . $usuario . "' AND PASSWORD='" . $password . "'");
        $select->execute();
        $resultado = $select->fetch(PDO::FETCH_ASSOC);
//        if ($resultado != false) {
//            session_start();
//            $_SESSION['usuario']=1;
//        } else {
//            session_start();
//            $_SESSION['usuario']=0;
//        }
    } catch (Exception $ex) {
        echo $ex->getMessage();
    }
    return $resultado;
}

?>