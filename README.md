# Projeto CRUD Loja

Este é um projeto acadêmico que implementa um sistema CRUD (Create, Read, Update, Delete) completo para gerenciamento de produtos e categorias de produtos. Desenvolvido em PHP com MySQL, o projeto oferece uma interface simples e funcional para operações básicas de um e-commerce.

## Funcionalidades

- **Gerenciamento de Categorias:**
  - Cadastro de novas categorias.
  - Listagem de todas as categorias existentes.
  - Edição de categorias.
  - Exclusão de categorias.

- **Gerenciamento de Produtos:**
  - Cadastro de novos produtos, associando-os a categorias existentes.
  - Listagem de todos os produtos.
  - Edição de produtos.
  - Exclusão de produtos.

## Tecnologias Utilizadas

- **Backend:** PHP
- **Banco de Dados:** MySQL
- **Frontend:** HTML, CSS (Bootstrap)
- **Servidor Web:** Apache (geralmente utilizado com PHP)

## Estrutura do Projeto

```
projetoLoja/
├── altera_categoria.php
├── altera_produto.php
├── banco/
│   └── BDLOJA.sql
├── cadastrar_categoria.php
├── cadastrar_produto.php
├── cadastro_categoria.php
├── conexao.php
├── del_categoria.php
├── del_produto.php
├── exclui_categoria.php
├── exclui_produto.php
├── frm_altera_categoria.php
├── frm_altera_produto.php
├── frm_cadastra_categoria.php
├── frm_cadastra_produto.php
├── index.html
├── lista_categoria.php
├── lista_categoria_select.php
└── lista_produto.php
```

## Como Configurar e Rodar o Projeto

Para configurar e executar este projeto em seu ambiente local, siga os passos abaixo:

### Pré-requisitos

Certifique-se de ter os seguintes softwares instalados em sua máquina:

- **Servidor Web:** Apache (ou similar, como Nginx)
- **Interpretador PHP:** Versão 7.x ou superior
- **Servidor de Banco de Dados:** MySQL
- **Gerenciador de Banco de Dados:** phpMyAdmin (opcional, mas recomendado para facilitar a administração do banco de dados)

### Passos de Instalação

1.  **Clone o Repositório:**
    ```bash
    git clone https://github.com/juliacancio-dev/Projeto-CRUD-Loja.git
    ```

2.  **Mova os Arquivos para o Servidor Web:**
    Copie o conteúdo da pasta `Projeto-CRUD-Loja` para o diretório `htdocs` (ou `www`) do seu servidor Apache. Por exemplo, se você estiver usando XAMPP, o caminho seria `C:\xampp\htdocs\Projeto-CRUD-Loja`.

3.  **Crie o Banco de Dados:**
    - Acesse o seu gerenciador de banco de dados (por exemplo, phpMyAdmin).
    - Crie um novo banco de dados com o nome `bdloja`.
    - Importe o arquivo `BDLOJA.sql` (localizado na pasta `banco/` do projeto) para o banco de dados `bdloja` que você acabou de criar. Este arquivo irá criar as tabelas `TBCATEGORIA`, `TBPRODUTO`, `TBVENDA` e `TBITENS` e popular com dados de exemplo.

4.  **Configure a Conexão com o Banco de Dados:**
    O arquivo `conexao.php` já está configurado para `localhost`, usuário `root` e senha vazia, que são as configurações padrão do XAMPP/WAMP. Se suas credenciais do MySQL forem diferentes, edite o arquivo `conexao.php`:

    ```php
    <?php
    $con = mysqli_connect("localhost", "root", "", "bdloja");
    ?>
    ```
    - `localhost`: Endereço do servidor do banco de dados.
    - `root`: Nome de usuário do banco de dados.
    - ``: Senha do banco de dados (deixe em branco se não houver senha).
    - `bdloja`: Nome do banco de dados.

5.  **Acesse o Projeto no Navegador:**
    Abra seu navegador e acesse:
    ```
    http://localhost/Projeto-CRUD-Loja/index.html
    ```
    (Ajuste o caminho se você moveu os arquivos para um subdiretório diferente no seu servidor web).

## Contribuição

Contribuições são bem-vindas! Se você quiser melhorar este projeto, sinta-se à vontade para abrir issues ou enviar pull requests.

## Licença

Este projeto está licenciado sob a licença MIT. Veja o arquivo `LICENSE` para mais detalhes. (Assumindo licença MIT, caso contrário, ajuste).

## Autor

- **Julia Cancio** - [GitHub](https://github.com/juliacancio-dev)
