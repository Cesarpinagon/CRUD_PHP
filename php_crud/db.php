<?php
    //Biblioteca de conexion
    /*
    primer parametro es la direccion donde se encuentra la base de datos
    segundo parametro es el usuario de nuestro servidor
    tercer parametro es la contraseña del usuario
    cuarto parametro es el nombre de la base de datos
    */

    session_start();

    $conn = mysqli_connect(
        "localhost",
        "root",
        "",
        "php_crud"
    );

    if(isset($conn)){
        echo "<script>console.log('Conexion exitosa')</script>";
    }else{
        echo "<script>console.log('Conexion fallida')</script>";
    }
?>