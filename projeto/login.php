<?php
session_start();

// processamento do login
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['login'])) {
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];
    
    // verificação de login para professor
    if ($usuario === 'professor' && $senha === 'professor') {
        $_SESSION['tipo'] = 'professor';
        header("Location: painel.php");
        exit();
    }
    // verificação de login para bibliotecário
    elseif ($usuario === 'biblio' && $senha === 'biblio') {
        $_SESSION['tipo'] = 'biblio';
        header("Location: painel.php");
        exit();
    } else {
        echo "Usuário ou senha incorretos!";
    }
}
// logout
if (isset($_GET['logout'])) {
    session_destroy();
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Login - Sistema de Biblioteca</title>
</head>
<body>
    <h2>Login</h2>
    <form method="POST">
        <label for="usuario">Usuário:</label>
        <input type="text" id="usuario" name="usuario" required><br><br>
        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha" required><br><br>
        <button type="submit" name="login">Entrar</button>
    </form>
</body>
</html>