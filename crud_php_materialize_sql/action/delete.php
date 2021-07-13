<?php
    session_start();
    include_once "connection.php";

    if(isset($_POST['deletar'])){
        $id = mysqli_escape_string($connect, $_POST['id']);
            $sql = "DELETE FROM clientes WHERE id = '$id'";
            if(mysqli_query($connect, $sql)){
                $_SESSION['sms'] = "Deletado  com sussesso!";
                header('Location:../index.php?');
            }else{
                $_SESSION['sms'] = "Erro ao Deletar";
                header('Location:../index.php?error');
            }
        } 

?>