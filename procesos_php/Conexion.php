<?php
function obtenerConexion() {
    $serverName = "localhost";
    $dbName = "blog_master";
    $username = "root";
    $password = "";
    try {
        $pdo =new PDO('mysql:host='.$serverName.';dbname='.$dbName, $username, $password);
        //echo "Conexion exitosa";
    } catch (Exception $ex) {
        echo "error en la conexion".$ex->getMessage();
    }
    return $pdo;
}

function cerraConexion() {
    $pdo = null;
}

?>