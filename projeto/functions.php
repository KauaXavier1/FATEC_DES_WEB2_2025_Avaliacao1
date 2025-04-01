<?php 
// função para verificar se o usuário está logado
function verificarLogin($tipo) {
    if (!isset($_SESSION['tipo']) || $_SESSION['tipo'] !== $tipo) {
        header("Location: login.php");
        exit();
    }
}

// função de logout
function logout() {
    session_start();
    session_destroy();
    header("Location: login.php");
    exit();
}