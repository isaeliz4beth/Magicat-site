<?php
session_start();
$nomeUsuario = $_SESSION["nomeusuario"] ?? "";
$isAuthenticated = isset($_SESSION['idcliente']);
$nomeCliente = $isAuthenticated ? $_SESSION['nomecliente'] : "";
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Magicats </title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="images/flaticon.png" href="images/flaticon.png">
    <link rel="stylesheet" href="css/slider.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
    <style>
        body, h3, h4, h5, h6, p {
            font-family: 'FonteCorpo';
        }
        h1, h2 {
            text-align: center;
            font-family: 'MinhaFonte';          
        }
        @font-face {
            font-family: 'MinhaFonte';
            src: url(fonts/VCR_OSD_MONO_1.001.ttf);
        }
        @font-face {
            font-family: 'FonteCorpo';
            src: url(fonts/Montserrat-Thin.ttf);
        }
    </style>
</head>

<body style="background-image: url('./img/florest.png');">
    <header>
        <nav> 
            <ul class="menu">
                <li><a href="index.php">HOME</a></li>
                <li><a href="Sobreojogo.html">SOBRE O JOGO</a></li>
                <li><a href="desenvolvedores.html">DESENVOLVEDORES</a></li>
                <?php if ($isAuthenticated) { ?>
                    <li><a href="login.php?id=<?= $sessao_idcliente ?>">PERFIL</a></li>
                    <li><a href="logout.php">LOGOUT</a></li>
                    <h3 class="menu-right2">Olá <?= $nomeCliente; ?></h3>
                <?php } else { ?>
                    <li><a href="cadastrausuario.php">CADASTRO</a></li>
                    <li><a href="login.php">LOGIN</a></li>
                <?php } ?>
            </ul>
        </nav>
        <div class="imagemlogo">
            <img src="img/logoINDEX.png" alt="Logo do Projeto" height="200">
        </div>
        <h1>Melhor Jogo de RPG</h1>
    </header>
    <section class="hero">
        <div class="hero-content">
            <h2>Bem-vindo ao mundo do nosso RPG!</h2> 
            <p>Explore e mergulhe em aventuras incríveis.</p>
            <a href="Sobreojogo.html" class="cta-button">Ver história</a>
        </div>
    </section>

    <footer>
        <p>&copy; <?= date("Y"); ?> Magicats the game. Todos os direitos reservados.</p>
    </footer>
</body>
</html>
