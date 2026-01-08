<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Listagem de Produto</title>
  </head>
  <body>
    <div class="container">
        <h1>Listagem de Produto</h1>
        <h4><a href="Index.html">Voltar</a></h4>

        <!-- Tabela de Produtos -->
        <table class="table table-dark">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Nome</th>
              <th scope="col">Preço</th>
              <th scope="col">Categoria</th>
              <th scope="col">Editar</th>
              <th scope="col">Exculir</th>
            </tr>
          </thead>
          <tbody>
            <?php
                /* 1 - Chamando o arquivo de conexão */
                require  "conexao.php";

                /* 2 - Criando o comando SQL para consulta dos registros */
                $comandoSql = "SELECT p.IDPROD, p.NOMEPROD, p.PRECOPROD, c.NOMECATE 
                               FROM tbproduto p, tbcategoria c
                               WHERE p.CODCATE = c.IDCATE ORDER BY IDPROD ASC";

                /* 3 - Executando o comando SQL */
                $resultado = mysqli_query($con, $comandoSql);

                /* 4 - Pegando os dados da consulta e criando as linhas da tabela */
                while($dados = mysqli_fetch_assoc($resultado)){
                    $id = $dados["IDPROD"];
                    $nomeP = $dados["NOMEPROD"];
                    $preco = $dados["PRECOPROD"];
                    $nomeC = $dados["NOMECATE"];

                    echo "<tr>
                            <th scope='row'>$id</th>
                            <td>$nomeP</td>
                            <td>R$ " . number_format($preco, 2, ',', '.') . "</td>
                            <td>$nomeC</td>
                            <td> <a href='frm_altera_produto.php?id=$id'> <button type='button' class='btn btn-outline-warning'>Editar</button> </a> </td>
                            <td> <a href='del_produto.php?id=$id'> <button type='button' class='btn btn-outline-danger'>Excluir</button> </a> </td>
                          </tr>";
                }
            ?>
          </tbody>
        </table>
        
    </div>

    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
