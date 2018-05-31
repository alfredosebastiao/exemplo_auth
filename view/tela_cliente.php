<?php require_once '../model/Utilizador.php';
session_start();
/**
 * Verifica se user esta logado e tem privilegios de um cliente
 */
if(!(($_SESSION['is_logado']=="1") && ($_SESSION['is_cliente']=="1"))){
    header("Location:http://localhost/exemplo_auth/");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pagina Cliente</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="http://localhost/exemplo_auth/assets/style.css" rel="stylesheet">
</head>
<body>

<div class="row">
    <?php include 'nav-bar.php'?>
</div>
<div class="row">
    <div class="col-lg-12">
        <h1 class="text-center text-success">Voce esta logado como Cliente</h1>
    </div>

</div>

</div>
</body>
</html>