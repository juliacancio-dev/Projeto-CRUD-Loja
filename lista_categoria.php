<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Listagem de categoria</title>
  </head>
  <body>
    <div class="container">
        <h1>Listagem de categoria</h1>
        <h4><a href="Index.html">Voltar</a></h4>

        <table class="table table-dark">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Nome</th>
              <th scope="col">Editar</th>
              <th scope="col">Exculir</th>
            </tr>
          </thead>
          <tbody>
        <?php
            /*1-Chamando o arquivo de conexão*/
            require  "conexao.php";

            /*2-Criando o comando sql para consulta dos registros */
            $comandoSql = "SELECT * FROM tbcategoria";

            /*3-execultando o comando sql*/
            $resultado = mysqli_query($con, $comandoSql);

            /*4- Pegando os dados da consulta cria e exibindo*/
            while($dados = mysqli_fetch_assoc($resultado)){
                $id = $dados["IDCATE"];
                $nome = $dados["NOMECATE"];

                echo "<tr>
                        <th scope='row'>$id</th>
                        <td>$nome</td>
                        <td> <a href='frm_altera_categoria.php?id=$id'> <button type='button' class='btn btn-outline-warning'>Editar</button> </a> </td>
                        <td> <a href='del_categoria.php?id=$id'> <button type='button' class='btn btn-outline-danger'>Excluir</button> </a> </td>
                      </tr>";
            
            }

        ?>
      </tbody>
    </div>

    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>