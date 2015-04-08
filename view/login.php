<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="">
        <!--<link rel="icon" href="../../favicon.ico">-->

        <title>URT - Acessar</title>

        <!-- Bootstrap core CSS -->
        <link href="./assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="./assets/bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="./assets/custom/css/signin.css" rel="stylesheet">
        <link href="./assets/custom/css/sticky-footer-navbar.css" rel="stylesheet">
        <link href="./assets/custom/css/system.css" rel="stylesheet">        
    </head>

    <body>
        <!-- Fixed navbar -->
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">                    
                    <a class="navbar-brand">Ultimate RPG Tools</a>
                </div>
            </div>
        </nav>

        <!-- Begin page content -->
        <div class="container">
            <form id="form-login" class="form-signin" >
                <h2 class="form-signin-heading">Iniciar sessão</h2>

                <label for="login" class="sr-only">Usuário</label>
                <input id="login" type="text" class="form-control" placeholder="Usuário" required autofocus>

                <label for="pass" class="sr-only">Senha</label>
                <input id="pass" type="password" class="form-control" placeholder="******" required>

                <div class="checkbox">
                    <label>
                        <input type="checkbox" value="remember-me">Lembrar
                    </label>
                </div>

                <input type="hidden" id="control" value="Login" >
                <button id="action" class="btn btn-success btn-block" value="login" type="submit">Entrar</button>
            </form>
        </div> <!-- /container -->

        <footer class="footer">
            <div class="container">
                <p class="text-muted">Desenvolvido por Kaciano R. Ghelere</p>
            </div>
        </footer>

        <script src="./assets/jquery/js/jquery.min.js"></script>
        <script src="./assets/custom/js/send/login.js"></script>
        <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
                <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
        <script src="./assets/custom/js/ie-emulation-modes-warning.js"></script>

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->        
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->        
        <script src="./assets/custom/js/ie10-viewport-bug-workaround.js"></script>        
    </body>
</html>