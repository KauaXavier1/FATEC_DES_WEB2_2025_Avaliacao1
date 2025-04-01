<?php
session_start();
verificarLogin('professor');  // Ou 'biblio' dependendo do tipo de usuário logado

echo "<h2>Livros Cadastrados:</h2>";

if (file_exists('livros.txt')) {
    $livros = file('livros.txt', FILE_IGNORE_NEW_LINES);
    foreach ($livros as $livro) {
        list($titulo, $autor, $editora, $isbn) = explode('|', $livro);
        echo "<p><strong>$titulo</strong> - $autor ($editora) ISBN: $isbn</p>";
    }
} else {
    echo "Nenhum livro cadastrado.";
}
?>
