<?php
include("conectadb.php");

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];

    #VALIDAÇÃO DE USUARIO. VERIFICA SE USUARIO JÁ EXISTE
    $sql ="SELECT COUNT(usu_id) FROM usuarios WHERE usu_nome ='$nome' 
    AND usu_senha = '$senha'";
    $retorno = mysqli_query($link, $sql);

    while($tbl = mysqli_fetch_array($retorno)){
        $cont = $tbl[0];
    }
    #VALIDAÇÃO DE TRUE E FALSE
    if($cont == 1){
        echo"<script>window.alert('USUARIO JÁ EXISTE');</script>";
    }
    else{
        $sql = "INSERT INTO usuarios (usu_nome, usu_senha, usu_ativo) 
        VALUES('$nome','$senha','s')";
        mysqli_query($link, $sql);
        #CADASTROU USUARIO E JOGA MENSAGEM NA TELA E DIRECIONA PARA LISTA USUARIO
        echo"<script>window.alert('USUARIO CADASTRADO');</script>";
        echo"<script>window.location.href='login.php';</script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>CADASTRO DE USUARIOS</title>
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
    <div>
    <ul class="menu">
                <li><a href="index.php">HOME</a></li>
                <li><a href="Sobreojogo.html">SOBRE O JOGO</a></li>
                <li><a href="desenvolvedores.html">DESENVOLVEDORES</a></li>
                <li><a href="cadastrausuario.php">CADASTRO</a></li>
                <li><a href="login.php">LOGIN</a></li>
                <br>

    </ul>
    </div>

    <div class ="form-container">
        <form action="cadastrausuario.php" method="post">
         <h1>CADASTRO DE USUARIO</h1>
            <input type="text" name="nome" id="nome" placeholder="NOME">
            <p></p>
            <input type="password" name="senha" id="senha"placeholder="SENHA">
            <p></p>
            <input type="submit" name="cadastrar" id="cadastrar" value="CADASTRAR">
            
        </form>

    </div>    

    
    </<?php
include("conectadb.php");

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];

    #VALIDAÇÃO DE USUARIO. VERIFICA SE USUARIO JÁ EXISTE
    $sql ="SELECT COUNT(usu_id) FROM usuarios WHERE usu_nome ='$nome' 
    AND usu_senha = '$senha'";
    $retorno = mysqli_query($link, $sql);

    while($tbl = mysqli_fetch_array($retorno)){
        $cont = $tbl[0];
    }
    #VALIDAÇÃO DE TRUE E FALSE
    if($cont == 1){
        echo"<script>window.alert('USUARIO JÁ EXISTE');</script>";
    }
    else{
        $sql = "INSERT INTO usuarios (usu_nome, usu_senha, usu_ativo) 
        VALUES('$nome','$senha','n')";
        mysqli_query($link, $sql);
        #CADASTROU USUARIO E JOGA MENSAGEM NA TELA E DIRECIONA PARA LISTA USUARIO
        echo"<script>window.alert('USUARIO CADASTRADO');</script>";
        echo"<script>window.location.href='login.php';</script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>CADASTRO DE USUARIO</title>
</head>
<body>

    
</body>
</html>