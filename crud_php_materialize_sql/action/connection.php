<?php

/*============================================
*** Openig a connection with the DATABASE ***
============================================= */
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db_name = "crud";

    $connect = mysqli_connect($host, $user, $pass, $db_name);
    mysqli_set_charset($connect, "utf8");
    if(!mysqli_error($connect)){
        
    }else{
        echo "Erro:: ".mysqli_error($connect). ":: Criando O banco de dados $db_name";

        $ql_create_new_db = "CREATE DATABASE $db_name";
        $connect = mysqli_connect($host, $user, $pass, $db_name);

        if(!mysqli_error($connect)){
            $sql = "CREATE TABLE clientes(id int primary key auto_increment, nome varchar(255) unique,
                                         sobrenome varchar(255), email varchar(30) unique, idade integer(3))";
            if($result = mysqli_query($connect, $sql)){
                $_SESSION['sms'] = "Banco de Dados criado com sussesso!";
                header('Location:../index.php?');

            }else{
                
            }
        }else{
            $_SESSION['sms'] = "erro ao criar o banco de dados, por favor consulte o administrador!";
                header('Location:../index.php?error');
        }
    }

?>