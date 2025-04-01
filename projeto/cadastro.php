<?php
session_start();

// Verificação de login
function verificarLogin($tipo) {
    if (!isset($_SESSION['tipo']) || $_SESSION['tipo'] !== $tipo) {
        header("Location: login.php");
        exit();
    }
}
