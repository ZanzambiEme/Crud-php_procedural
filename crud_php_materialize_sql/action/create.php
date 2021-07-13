<?php
    require_once "connection.php";
    session_start();
    function clear($input){
        global $connect;
        $var = mysqli_escape_string($connect, $input); // filrando so dados 
        $var = htmlspecialchars($var); // bloqueinado os XSS
        return $var;
    }

    if(isset($_POST['cadastar'])){
        $name = clear($_POST['name']);
        $surname = clear($_POST['surname']);
        $email = clear($_POST['email']);
        $age = clear($_POST['age']);
            $sql = "INSERT INTO clientes values (null, '$name', '$surname', '$email', '$age')";
            if(mysqli_query($connect, $sql)){
                $_SESSION['sms'] = "Cadastro com sussesso!";
                header('Location:../index.php?');
            }else{
                $_SESSION['sms'] = "Erro ao cadastrar";
                header('Location:../index.php?error');
            }
        } 
?>