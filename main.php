<?php 
    include('protect.php');
?>

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
    Olá, seja bem vindo a pagina inicial, <?php echo $_SESSION['nome']; ?>
    <p><a href="logout.php">Logout</a></p>
</body>
</html>