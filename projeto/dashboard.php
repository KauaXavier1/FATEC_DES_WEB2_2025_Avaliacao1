<?php
session_start();
include('functions.php');

// verificar login
if (!isset($_SESSION['tipo'])) {
    header("Location: login.php");
    exit();
}

// logout
if (isset($_GET['logout'])) {
    logout();
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Biblioteca</title>
</head>
<body>
    <h2>Bem-vindo ao painel de controle da Biblioteca</h2>

    <!-- logout -->
    <a href="dashboard.php?logout=true">Sair</a><br><br>

    <!-- cadastrar livro (apenas bibliotecário) -->
    <?php if ($_SESSION['tipo'] === 'biblio'): ?>
    <h3>Cadastrar Livro</h3>
    <form method="POST" action="cadastrar.php">
        <label for="titulo">Título do Livro: </label>
        <input type="text" id="titulo" name="titulo" required><br><br>

        <label for="autor">Autor: </label>
        <input type="text" id="autor" name="autor" required><br><br>

        <label for="editora">Editora: </label>
        <input type="text" id="editora" name="editora" required><br><br>

        <label for="isbn">ISBN: </label>
        <input type="text" id="isbn" name="isbn" required><br><br>

        <button type="submit" name="cadastrar_livro">Cadastrar Livro</button>
    </form>
    <br>
    <?php endif; ?>