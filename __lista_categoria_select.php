<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <!-- Meta tags Obrigatórias -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        <title>Listagem de categoria em select</title>
        
    </head>
    <body>
        <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Categoria</span>

                </div>
                
        <!--<div class="input-group">-->
            <select class="custom-select" id="inputGroupSelect04" aria-label="Exemplo de select com botão addon" name="categoria">
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

                        //echo "id, $id<br>"
                        //echo "nome, $nome<br><br>"

                        echo "<option value=$id>$nome</option>";
                    }
                ?>
            </select>
        
        </div>
    </body>


    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>


 