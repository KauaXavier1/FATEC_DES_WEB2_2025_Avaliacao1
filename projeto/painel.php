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
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Painel - Sistema de Biblioteca</title>
</head>
<body>
    <h2>Painel do Sistema de Biblioteca</h2>
    <p>Bem-vindo, <?php echo $usuario_tipo; ?>!</p>
    <a href="logout.php">Sair</a>
    <br><br>

    <?php if ($_SESSION['tipo'] === 'biblio'): ?>
        <h3>Bibliotecário - Cadastro de Livros</h3>
        <form method="POST" action="cadastrar.php">
            <label for="titulo">Título:</label>
            <input type="text" id="titulo" name="titulo" required><br><br>
            <label for="autor">Autor:</label>
            <input type="text" id="autor" name="autor" required><br><br>
            <label for="editora">Editora:</label>
            <input type="text" id="editora" name="editora" required><br><br>
            <label for="isbn">ISBN:</label>
            <input type="text" id="isbn" name="isbn" required><br><br>
            <button type="submit" name="cadastrar_livro">Cadastrar Livro</button>
        </form>
        <br><br>
        <a href="visualizar_livros.php">Visualizar Livros Cadastrados</a><br><br>
        <a href="visualizar_pedidos.php">Visualizar Pedidos</a>
    <?php elseif ($_SESSION['tipo'] === 'professor'): ?>
        <h3>Professor - Cadastro de Pedidos</h3>
        <form method="POST" action="cadastrar.php">
            <label for="titulo">Título:</label>
            <input type="text" id="titulo" name="titulo" required><br><br>
            <label for="autor">Autor:</label>
            <input type="text" id="autor" name="autor" required><br><br>
            <label for="editora">Editora:</label>
            <input type="text" id="editora" name="editora" required><br><br>
            <label for="isbn">ISBN:</label>
            <input type="text" id="isbn" name="isbn" required><br><br>
            <button type="submit" name="cadastrar_pedido">Cadastrar Pedido</button>
        </form>
        <br><br>
        <a href="visualizar_livros.php">Visualizar Livros Cadastrados</a>
    <?php endif; ?>
</body>
</html>