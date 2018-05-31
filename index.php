<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exemplo auth</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="http://localhost/exemplo_auth/assets/style.css" rel="stylesheet">
    <style type="text/css">

    </style>
</head>
<body>
<div class="login-form">
    <form action="controller/ControllerUtilizador.php" method="post">
        <input type="hidden" name="action" value="1">
        <h2 class="text-center">Faca o login</h2>
        <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input type="text" class="form-control" name="username" placeholder="Nome de utilizador" required="required">
            </div>
        </div>
        <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                <input type="password" class="form-control" name="password" placeholder="Senha" required="required">
            </div>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary login-btn btn-block">Login</button>
        </div>


        <?php if(!empty($_GET['error'])=='user-nao-corresponde'){?>
            <div class="row">

                <div class="error text-danger lighten-4">
                    <p class="text-center">Nome de tilizador ou Senha incorrectos</p>
                </div>
            </div>

        <?php } ?>
    </form>


</div>
</body>
</html>