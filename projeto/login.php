<?php
session_start();

// Processamento do login
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['login'])) {
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];
    
    // Verificação de login para professor
    if ($usuario === 'professor' && $senha === 'professor') {
        $_SESSION['tipo'] = 'professor';
        header("Location: painel.php");
        exit();
    }
    // Verificação de login para bibliotecário
    elseif ($usuario === 'biblio' && $senha === 'biblio') {
        $_SESSION['tipo'] = 'biblio';
        header("Location: painel.php");
        exit();
    } else {
        echo "Usuário ou senha incorretos!";
    }
}