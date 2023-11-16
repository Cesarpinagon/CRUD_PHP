<?php  

    include("db.php");

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $query = "DELETE FROM usuarios WHERE id = $id";
        $result = mysqli_query($conn, $query);
        if(!$result){
            die("Failed to delete user");
        }else{

        $_SESSION['mensaje'] = 'Successfully deleted user' ;
        $_SESSION['color'] = "danger";
        header("Location: index.php"); 
        }
    }else{
        
        echo "No ID received";
    }

?>