<?php 
include_once('control/HomeControl.php');
$control = new HomeControl();
?>
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
        <link rel="stylesheet" href="css/home.css">
    </head>
    <body>
        <h1>Lista de usuários</h1>
        <div id="formulario">
            <form id="user_form" action="index.php" method="post">
                <table id="form_table" align="center">
                    <tr>
                        <td><label for="nome">Nome:</label></td>
                        <td><input type="text" id="nome" /></td> 
                    </tr>
                    
                    <tr>
                        <td><label for="login">Login:</label></td>
                        <td><input type="text" id="login" /></td>
                    </tr>
                    
                    <tr>
                        <td><input class="btn" type="submit" value="Enviar" /></td>
                    </tr>
                </table>                   
            </form>        
        </div>
        <br />
        <br />
        <table class="table table-hover table-striped table-responsive table-condensed" align="center" style='width: 700px;' >
            <tr style="background-color: lightgray">
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
        <script type="text/stylesheet">
            // $(function () {
            //     var dados = $('#user_form').serialize();
            //     $.ajax({
            //         type: "POST",
            //         data: dados,
            //         url: "../../ajax/relatorio/busca_rel_spsadt.php",
            //         dataType: "html",
            //         beforeSend: function (data) {
            //             $("#status_busca").html("Buscando informações...");
            //         },
            //         success: function (data) {
            //             $("#status_busca").html("");
            //             $("#grid_guias").html(data);
            //         },
            //         error: function (data) {
            //             $("#status_busca").html("Ocorreu um erro durante a busca de guias. " + data);
            //         }
            //     });
            // });
        </script>
    </body>
</html>
