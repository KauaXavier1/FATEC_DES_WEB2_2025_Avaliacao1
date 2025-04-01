<?php
session_start();

// função para verificar se o usuário está logado
function verificarLogin($tipo) {
    if (!isset($_SESSION['tipo']) || $_SESSION['tipo'] !== $tipo) {
        header("Location: login.php");
        exit();
    }
}

// verificação do tipo de usuário logado
if (isset($_SESSION['tipo'])) {
    if ($_SESSION['tipo'] === 'biblio') {
        // Bibliotecário
        $usuario_tipo = 'Bibliotecário';
    } elseif ($_SESSION['tipo'] === 'professor') {
        // Professor
        $usuario_tipo = 'Professor';
    }
} else {
    // caso o usuário não esteja logado
    header("Location: login.php");
    exit();
}
?>