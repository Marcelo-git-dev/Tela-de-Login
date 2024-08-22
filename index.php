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
    <!--<header>
        <img src="img_login/IMG_login.jpg" alt="">
    </header>-->
    <header>
        <section id="menu_ico">
            <div>
                <img src="img_login/menu.png" alt="">
            </div>
            <ul id="menu_list">
                <li>Agendar</li>
                <li>Produtos</li>
                <li>Cursos</li>
            </ul>
        </section>
        <div id="logout">
            <a href="logout.php"><img src="img_login/logout.png" alt=""></a>
        </div>
    </header>
    
    <main>
        <h1>
            Acesse sua Conta:
        </h1>
        <form action="" method="post">
            <label for="cliente_email">E-mail:</label>
            <input type="text" name="email" id="idemail">
            <label for="cliente_senha">Senha:</label>
            <input type="password" name="senha" id="idsenha">
            <?php 
                include('logica.php');
                if(isset($_POST['email']) || isset($_POST['senha'])) {

                    if(strlen($_POST['email']) == 0){
                        echo "<p style=\"color: red; display: inline;\"><strong>*E-mail obrigatório</strong></p>";
                    } else if (strlen($_POST['senha']) == 0){
                        echo "<p style=\"color: red; display: inline;\"><strong>*Senha obrigatória</strong></p>";
                    } else {
                        $email = $mysqli->real_escape_string($_POST['email']);
                        $senha = $mysqli->real_escape_string($_POST['senha']);

                        $sql_code = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
                        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do codigo SQL" . $mysqli->error);

                        $quantidade = $sql_query->num_rows;

                        if($quantidade == 1) {
                            $usuario = $sql_query->fetch_assoc();
                            if(!isset($_SESSION)){
                                session_start();
                            }
                            $_SESSION['id'] = $usuario['id'];
                            $_SESSION['nome'] = $usuario['nome'];

                            header("Location: main.php");


                        } else {
                            echo "<p style=\"color: red; display: inline;\"><strong>Email e/ou senha incorreta(s)</strong></p>";
                        }
                    }
                }
                    
            ?>
            <input type="submit" value="Enviar">
        </form>
    </main>
    <footer>
        <div>
            <p>Ainda não possui cadastro? <a href="cadastro.php">Cadastrar</a></p>
        </div>
        <nav class="Redes">
            <div>
                <a href="https://api.whatsapp.com/send?phone=+5531991311579&text=Ol%C3%A1%2C+Como+vai%3F%0AEspero+que+bem%21%0A%0AGostaria+de+falar+com+voc%C3%AA..." target="_blank"><img class="redes" src="img_login/icon-whatsapp.png" alt="Whatsapp"></a>
            </div>
            <div >
                <a href="https://www.instagram.com/marcelo_amfds/" target="_blank"><img class="redes" src="img_login/instagram.png" alt="Instagram"></a>
            </div>
        </nav>
    </footer>
</body>
</html>