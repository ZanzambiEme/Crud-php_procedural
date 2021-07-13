<?php
    include_once "connection.php";
    session_start();
    
    if(isset($_POST['editar'])){
        $name = mysqli_escape_string($connect, $_POST['name']);
        $surname = mysqli_escape_string($connect, $_POST['surname']);
        $email = mysqli_escape_string($connect, $_POST['email']);
        $age = mysqli_escape_string($connect, $_POST['age']);

        $id = mysqli_escape_string($connect, $_POST['id']);

        if(!$age = filter_var(FILTER_SANITIZE_NUMBER_INT) || !$name = filter_var(FILTER_SANITIZE_STRING)){
        }else{
            $sql = "UPDATE clientes SET nome = '$name', sobrenome = '$surname', email = '$email', idade = '$age' WHERE id = '$id'";
            if(mysqli_query($connect, $sql)){
                $_SESSION['sms'] = "Dados actualizados com sussesso!";
                header('Location:../index.php?');
            }else{
                $_SESSION['sms'] = "Erro ao actualizar";
                header('Location:../index.php?error');
            }
        } 
    }else{

    }
?>