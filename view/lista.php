<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">	
        <title>Lista de usuários</title>        
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">-->

        <!-- Optional theme -->
        <link rel="stylesheet" href="css/bootstrap-theme.css">
        <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">-->

    </head>
    <body>
        <h1>Lista de usuários</h1>
        <input class="btn btn-info" type="button" value="Teste" />
        <br />
        <br />
        <table class="table table-hover table-striped table-responsive table-bordered table-condensed" align="center">
            <tr>
                <th>Nome</th>
                <th>Login</th>
            </tr>
            <!-- a variável lista que colocamos
                 dentro da visão -->
            <?php foreach ($lista as $usuario): ?>
                <tr>
                    <td><?php echo $usuario['nome']; ?></td>
                    <td><?php echo $usuario['login']; ?></td>
                </tr>
            <?php endforeach; ?>        
        </table>

        <!-- Placed at the end of the document so the pages load faster -->
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>
