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
  Título|Autor|Editora|ISBN

- Tentativas de cadastro sem estar logado ou logado como professor são redirecionadas para o painel apropriado.

#### 2.2 Cadastro de Pedidos

- **Apenas professores** podem cadastrar recomendações de compra de livros.
- As recomendações são salvas no arquivo `pedidos.txt` no formato:
Título|Autor|Editora|ISBN


### 3. Visualização de Livros e Pedidos

- **Todos os usuários** podem visualizar os livros cadastrados no sistema.
- **Apenas o bibliotecário** pode visualizar os pedidos cadastrados pelos professores.

### 4. Funcionalidade de Logout

- A qualquer momento, os usuários podem sair da sua sessão clicando no botão de logout, o que os redireciona de volta para a tela de login.

## Tecnologias Utilizadas

- **PHP**: Linguagem de programação utilizada para o desenvolvimento do sistema.
- **XAMPP**: Ambiente de desenvolvimento que inclui Apache e PHP.
- **Arquivos de Texto**: Utilizados para armazenar os dados de livros (`livros.txt`) e pedidos (`pedidos.txt`).

## Como Rodar o Projeto

1. **Instalar o XAMPP**: Baixe e instale o [XAMPP](https://www.apachefriends.org/pt_br/index.html).
2. **Colocar os Arquivos no Diretório do XAMPP**: Coloque a pasta do projeto na pasta `htdocs` do XAMPP.
3. **Iniciar o Apache**: Abra o painel de controle do XAMPP e inicie o servidor Apache.
4. **Acessar o Sistema**: Abra o navegador e vá para `http://localhost/projeto/login.php`.
5. **Credenciais de Login**:
 - **Professor**: Login: `professor`, Senha: `professor`
 - **Bibliotecário**: Login: `biblio`, Senha: `biblio`






