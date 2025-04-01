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
// função para exibir livros
function listarLivros() {
    if (file_exists('livros.txt')) {
        $livros = file('livros.txt', FILE_IGNORE_NEW_LINES);
        foreach ($livros as $livro) {
            list($titulo, $autor, $editora, $isbn) = explode('|', $livro);
            echo "<p><strong>$titulo</strong> - $autor ($editora) ISBN: $isbn</p>";
        }
    } else {
        echo "Nenhum livro cadastrado.";
    }
}
// função para exibir pedidos
function listarPedidos() {
    if (file_exists('pedidos.txt')) {
        $pedidos = file('pedidos.txt', FILE_IGNORE_NEW_LINES);
        foreach ($pedidos as $pedido) {
            list($titulo, $autor, $editora, $isbn) = explode('|', $pedido);
            echo "<p><strong>$titulo</strong> - $autor ($editora) ISBN: $isbn</p>";
        }
    } else {
        echo "Nenhum pedido cadastrado.";
    }
}
?>
