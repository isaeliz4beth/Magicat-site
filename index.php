<?php
    session_start();
    $nomeusuario = $_SESSION["nomeusuario"];
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Melhor Jogo de RPG - Página Inicial</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/slider.css">
</head>
<body style="background-image: url('./img/florest.png');">
    <header>
        <nav>
            <ul class="menu">
                <li><a href="index.php">HOME</a></li>
                <li><a href="Sobreojogo.html">SOBRE O JOGO</a></li>
                <li><a href="desenvolvedores.html">DESENVOLVEDORES</a></li>
                <li><a href="cadastrausuario.php">CADASTRO</a></li>
                <li><a href="login.php">LOGIN</a></li>

                <?php 
                    if(isset($_SESSION['idcliente'])){
                ?>
                     <form class="formmenu"action="logout.php" method="post">
                        <h3 class="menu-right2">
                            Olá <?= $_SESSION['nomecliente'];?>
                        </h3>
                        <li class="menu-right"><a href="login.php?id=<?=$sessao_idcliente?>">PERFIL</a></li>
                        <li class="menu-right"><a href="logout.php">LOGOUT</a></li>
                     </form>   
                <?php
                }  
                else {
                ?>
                    
                
                <?php
                }
                ?>  
            </ul>
        </nav>
        <img src="img/logo_branco.png" alt="Logo da Página" width="175" height="175">
        <h1>Melhor Jogo de RPG</h1>
    </header>

    <section class="hero">
        <div class="slider-container">
            <div class="slider">
                <div class="slide">
                    <img src="img/slider1.jpg" alt="Slider 1">
                </div>
                <div class="slide">
                    <img src="img/slider2.jpg" alt="Slider 2">
                </div>
                <div class="slide">
                    <img src="img/slider3.jpg" alt="Slider 3">
                </div>
            </div>
        </div>
        <div class="hero-content">
            <h2>Bem-vindo ao mundo do nosso RPG</h2>
            <p>Explore e mergulhe em aventuras incríveis.</p>
            <a href="#" class="cta-button">Ver Jogos</a>
        </div>
    </section>

    <section class="game-list">
        <h3>Conheça Nosso Jogo</h3>
        <div class="carousel">
            <div class="game-card">
                <img src="img/dayflorest.png" alt="Nome do Jogo 1">
                <h4>Nome do Jogo 1</h4>
                <p>Uma descrição breve e empolgante do Jogo 1. Entre na ação agora mesmo!</p>
                <a href="#">Saiba Mais</a>
            </div>
            <!-- Adicione mais game-cards conforme necessário -->
        </div>
    </section>

    <footer>
        <p>&copy; 2023 Jogos Incríveis. Todos os direitos reservados.</p>
    </footer>
</body>
</html>