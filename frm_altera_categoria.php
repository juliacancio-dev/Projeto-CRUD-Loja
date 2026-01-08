<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <!-- Meta tags Obrigatórias -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        <title>Alteração de Categoria</title>

        <style>
            .input-group-text {
                width: 120px;
            }
            .form-control {
                width: 250px; 
            }
            
        </style>
    </head>
    <body>
        <div class=container>
            <h1>Alteração de Categoria</h1>

            <?php
                /*1-Chamando o arquivo de conexão*/
                require  "conexao.php";

                /*2- Pegando o valor vindo da url*/
                $id_categoria=$_GET["id"];

                /*3- Criando o comando de SQL para selecionar o registro a ser alterado*/
                $comandoSql="SELECT * FROM TBCATEGORIA WHERE IDCATE=$id_categoria";


                /*4- Execultando o comando SQL*/
                $resultado=mysqli_query($con,$comandoSql);

                /*5- Pegando os dados da consulta criada e armazenando em variaveis*/
                $dados=mysqli_fetch_assoc($resultado);

                $c=$dados["NOMECATE"];

            ?>
            <form method="POST" action="altera_categoria.php">

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">Id</span>
                    </div>
                    <input readonly value="<?php echo $id_categoria ?>" type="text" class="form-control" aria-label="Exemplo do tamanho do input" aria-describedby="inputGroup-sizing-default" name="id">
                </div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">Nome</span>
                    </div>
                    <input value="<?php echo $c ?>" type="text" class="form-control" aria-label="Exemplo do tamanho do input" aria-describedby="inputGroup-sizing-default" name="categoria">
                </div>

                <button type="submit" class="btn btn-dark">Alterar</button>
                <button type="reset" class="btn btn-light">Limpar</button>
                
             </form>
            

            <!-- JavaScript (Opcional) -->
            <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        </div>
    </body>
</html>