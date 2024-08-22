<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="shortcut icon" href="img_login/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        if(!isset($_SESSION)){
            session_start();
        }
        if(!isset($_SESSION['id'])){
            die("<h1>Acesso negado!</h1> <p>Necessario login e senha para acessar.</p> <p><a href=\"index.php\">Fazer login</a></p>");
        }
    ?>
</body>
