<?php
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
