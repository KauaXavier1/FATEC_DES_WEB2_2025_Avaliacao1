<?php
session_start();
verificarLogin('biblio');  // Apenas bibliotecário pode visualizar pedidos

echo "<h2>Pedidos Cadastrados:</h2>";

if (file_exists('pedidos.txt')) {
    $pedidos = file('pedidos.txt', FILE_IGNORE_NEW_LINES);
    foreach ($pedidos as $pedido) {
        list($titulo, $autor, $editora, $isbn) = explode('|', $pedido);
        echo "<p><strong>$titulo</strong> - $autor ($editora) ISBN: $isbn</p>";
    }
} else {
    echo "Nenhum pedido cadastrado.";
}
?>
