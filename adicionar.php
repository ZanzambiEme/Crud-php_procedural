<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize css-->
    <link rel="stylesheet" href="materialize/css/materialize.min.css">
    <!--Import materialize js-->
    <script src="materialize/js/materialize.min.js"></script>
    <title>Adicionar</title>
</head>
<body  ondragstart="return false" oncontextmenu="return false">
    <div class="row">
        <div class="col s12 m6 push-m3 ">
            <h3 class="light">Adicionar Clientes</h3>
            <form action="action/create.php" method="POST">
                <div class=" input-field col s12">
                    <input type="text" name="name" id="name" autocapitalize="off" autocomplete="off">
                    <label for="name">Nome:</label>
                </div>
                <div class=" input-field col s12">
                    <input type="text" name="surname" id="surname" autocapitalize="off" autocomplete="off">
                    <label for="surname">Sobrenome:</label>
                </div>
                <div class=" input-field col s12">
                    <input type="email" name="email" id="email" autocapitalize="off" autocomplete="off">
                    <label for="email">Email:</label>
                </div>
                <div class=" input-field col s12">
                    <input type="text" name="age" id="age" autocapitalize="off" autocomplete="off">
                    <label for="name">Idade:</label>
                </div>

                <button type="submit" class="btn" name="cadastar">Cadastrar</button>
                <a href="index.php" class="btn green">lista de clientes</a>
            </form>
            
        </div>
    </div>
</body>
</html>