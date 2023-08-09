<?php
session_start();
include("conectadb.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];

    $sql = "SELECT COUNT(usu_id) FROM usuarios WHERE usu_nome = ? AND usu_senha = ? AND usu_ativo = 's'";
    $stmt = mysqli_prepare($link, $sql);
    mysqli_stmt_bind_param($stmt, "ss", $nome, $senha);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_bind_result($stmt, $cont);
    mysqli_stmt_fetch($stmt);
    mysqli_stmt_close($stmt);

    if ($cont == 1) {
        $sql = "SELECT * FROM usuarios WHERE usu_nome = ? AND usu_senha = ? AND usu_ativo = 's'";
        $stmt = mysqli_prepare($link, $sql);
        mysqli_stmt_bind_param($stmt, "ss", $nome, $senha);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        $row = mysqli_fetch_assoc($result);
        mysqli_stmt_close($stmt);

        $_SESSION['nomeusuario'] = $row['usu_nome'];
        header("Location: index.php");
        exit();
    } else {
        $login_error = "Usuário ou senha incorretos";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>LOGIN USUARIO</title>
</head>
<body style="background-image: url('./img/florest.png');">

    <form action="login.php" method="post">
        <h1>LOGIN DE USUARIO</h1>
        <input type="text" name="nome" placeholder="NOME" required>
        <p></p>
        <input type="password" name="senha" placeholder="SENHA" required>
        <p></p>
        <input type="submit" name="login" value="LOGIN">
        <?php if (isset($login_error)) echo "<p>$login_error</p>"; ?>
    </form>
    
</body>
</html>
