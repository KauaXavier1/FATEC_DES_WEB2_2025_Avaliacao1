<?php
session_start();

// verificação de login
function verificarLogin($tipo) {
    if (!isset($_SESSION['tipo']) || $_SESSION['tipo'] !== $tipo) {
        header("Location: login.php");
        exit();
    }
}
// cadastro de livro
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['cadastrar_livro'])) {
    verificarLogin('biblio');  // Apenas bibliotecário pode cadastrar livros
    
    $titulo = $_POST['titulo'];
    $autor = $_POST['autor'];
    $editora = $_POST['editora'];
    $isbn = $_POST['isbn'];

    // verificação de existência do arquivo e cadastro do livro
    $livro = "$titulo|$autor|$editora|$isbn" . PHP_EOL;
    file_put_contents('livros.txt', $livro, FILE_APPEND);
    echo "Livro cadastrado com sucesso!";
}