# FATEC_DES_WEB2_2025_Avaliacao1

## Sistema de Biblioteca em PHP

Este projeto implementa um sistema de gerenciamento de biblioteca utilizando PHP estruturado e armazenamento em arquivos de texto. O sistema permite que um bibliotecário cadastre livros adquiridos e visualize pedidos de compra recomendados por professores. Os professores podem visualizar os livros disponíveis e cadastrar recomendações de compra.

## Funcionalidades

### 1. Login e Logout

O sistema possui um mecanismo de login/logout utilizando sessões.

**Perfis de usuário**:

- **Bibliotecário**: Login: `biblio`, Senha: `biblio`
- **Professor**: Login: `professor`, Senha: `professor`

- O login é obrigatório para acessar qualquer funcionalidade do sistema.
- O logout encerra a sessão do usuário e redireciona para a tela de login.

### 2. Cadastro de Livros e Pedidos

#### 2.1 Cadastro de Livros

- **Apenas o bibliotecário** pode cadastrar livros.
- Os livros são salvos no arquivo `livros.txt` no formato:
  
