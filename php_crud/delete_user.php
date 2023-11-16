<?php  

    include("db.php");

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $query = "DELETE FROM usuarios WHERE id = $id";
        $result = mysqli_query($conn, $query);
        if(!$result){
            die("Fallo al eliminar el usuario");
        }else{

        $_SESSION['mensaje'] = 'Usuario eliminado correctamente';
        $_SESSION['color'] = "danger";
        header("Location: index.php"); 
        }
    }else{
        
        echo "No se ha recibido un ID";
    }

?>