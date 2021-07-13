<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <title>Adicionar</title>
<?php
    include_once "action/connection.php";
    session_start();
    if(isset($_SESSION['sms'])):?>
         <script>
            window.onload = function(){
                M.toast({html: '<?php echo $_SESSION['sms'];?>'});
            }
        </script>
        <?php
    endif;
    session_unset();
?>
</head>
<body>
   
        <div class="row">
                <div class="col sm12 s12 m6 push-m3 ">
                    <h3 class="light">Clientes</h3>
                    <table class="striped">
                        <thead>
                            <tr>
                                <th>Nome:</th>
                                <th>Sobrenome:</th>
                                <th>Email:</th>
                                <th>Idade:</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                                $sql = "SELECT * FROM clientes";
                                $reslut = mysqli_query($connect, $sql);
                                if(mysqli_num_rows($reslut) > 0):
                                   while( $dados = mysqli_fetch_array($reslut)):   
                            ?>
                            <tr>
                                <td><?php echo $dados['nome']?></td>
                                <td><?php echo $dados['sobrenome']?></td>
                                <td><?php echo $dados['email']?></td>
                                <td><?php echo $dados['idade']?></td>
                                <td> <a href="action/edit.php?id= <?php echo $dados['id']?>" class="btn-floating orange"><i class="material-icons">edit</i></a></td>
                                <td> <a href="#modal<?php echo $dados['id']?>" class="btn-floating red modal-trigger"><i class="material-icons">delete</i></a></td>

                                <!-- Modal Structure -->
                                <div id="modal<?php echo $dados['id']?>" class="modal">
                                    <div class="modal-content">
                                        <h4>Opa!</h4>
                                        <p>Tem certeza que deseja excluir?</p>
                                    </div>
                                    <div class="modal-footer">
                                        <form action="action/delete.php" method="POST">
                                            <input type="hidden" name="id" value="<?php echo $dados['id']?>">
                                            <button type="submit" name="deletar" class="btn red">Deletar</button>
                                            <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cancelar</a>
                                        </form>
                                    </div>
                                </div>
                            </tr>

                            <?php endwhile; 
                            else:
                                ?>
                                <tr>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                </tr>
                            <?php
                                endif;
                            ?>
                        </tbody>
                    </table>
                    <br>
                    <a href="adicionar.php" class="btn">Adicionar</a>
                </div>
            </div>

        <script>
              M.AutoInit();
        </script>
</body>
</html>
