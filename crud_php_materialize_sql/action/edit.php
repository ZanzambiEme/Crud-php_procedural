<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize css-->
    <link rel="stylesheet" href="../materialize/css/materialize.min.css">
    <!--Import materialize js-->
    <script src="../materialize/js/materialize.min.js"></script>
    <title>Adicionar</title>

</head>
<body  ondragstart="return false" oncontextmenu="return false">

    <?php
        
        include_once "connection.php";

        if(isset($_GET['id'])):
            $id = mysqli_escape_string($connect, $_GET['id']);
            $sql = "SELECT * FROM clientes WHERE id = '$id'"; 
            $result = mysqli_query($connect, $sql);
            $dados = mysqli_fetch_array($result);
        endif;
    ?>
    <div class="row">
        <div class="col s12 m6 push-m3 ">
            <h3 class="light">Editar dados cliente <?php echo $dados['nome'];?></h3>

            <form action="update.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $dados['id']?>">
                <div class=" input-field col s12">
                    <input type="text" name="name" id="name" value="<?php echo $dados['nome']?>">
                    <label for="name">Nome:</label>
                </div>
                <div class=" input-field col s12">
                    <input type="text" name="surname" id="surname" value="<?php echo $dados['sobrenome']?>" >
                    <label for="surname">Sobrenome:</label>
                </div>
                <div class=" input-field col s12">
                    <input type="email" name="email" id="email" value="<?php echo $dados['email']?>" >
                    <label for="email">Email:</label>
                </div>
                <div class=" input-field col s12">
                    <input type="text" name="age" id="age" value="<?php echo $dados['idade']?>">
                    <label for="name">Idade:</label>
                </div>

                <button type="submit" class="btn" name="editar">Actualizar</button>
                <a href="../index.php" class="btn green">lista de clientes</a>
            </form>
            
        </div>
    </div>
</body>
</html>