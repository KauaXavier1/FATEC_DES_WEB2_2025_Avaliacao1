<?php
session_start();
include('functions.php');

// cadastrar livro

if ($_SERVER['RESQUEST_METHOD']) === 'POST' && isset($_POST['cadastrar_livro'])) {
    verificarLogin('biblio');
    
    $titulo = $_POST['titulo'];
    $autor = $_POST['autor'];
    $editora = $_POST['editora'];
    $isbn = $_POST['isbn'];
    
    $linha = "$titulo|$autor|$editora|$isbn" . PHP_EOL;
    file_put_contents('livros.txt', $linha, FILE_APPEND);
    echo "Livro cadastrado com sucesso!";
}

// cadastrar pedido
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['cadastrar_pedido'])) {
    verificarLogin('professor');
    
    $titulo = $_POST['titulo'];
    $autor = $_POST['autor'];
    $editora = $_POST['editora'];
    $isbn = $_POST['isbn'];
    
    $linha = "$titulo|$autor|$editora|$isbn" . PHP_EOL;
    file_put_contents('pedidos.txt', $linha, FILE_APPEND);
    echo "Pedido cadastrado com sucesso!";
}
?>
