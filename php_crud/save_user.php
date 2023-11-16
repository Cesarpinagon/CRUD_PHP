<?php

include("db.php");

if(isset($_POST['guardar_usr'])){

    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $cv = $_POST['cv'];

    $query = "INSERT into usuarios(nombre, correo, cv) VALUES ('$nombre', '$correo', '$cv')";
    $result = mysqli_query($conn, $query);

    if(!$result){
        die("Error en Query");
    }else{
        header("Location: index.php");
    }
    
}

?>