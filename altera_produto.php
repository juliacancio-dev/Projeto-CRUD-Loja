<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Altera Produto</title>
</head>
<body>
    <?php
        /*1- Chamando o arquivo de conexão*/
        require  "conexao.php";

        /*2- pegando os dados vindo e armazenando em variaveis do formulario*/

        $id=$_POST["id"];
        $n=$_POST["nome"];
        $p=$_POST["preco"];
        $c=$_POST["categoria"];

        /*3- Crinando o comando sql para alteração do registro*/
        $comandoSql="UPDATE TBPRODUTO 
                    SET NOMEPROD='$n', PRECOPROD=$p, CODCATE=$c 
                    WHERE IDPROD=$id";

        /*4- executando o comando sql */
        $resultado= mysqli_query($con, $comandoSql);

        /*5- verificando se o comando sql foi execultado*/
        if($resultado==true)
            echo "<script>
                    setTimeout(function() {
                    window.location.href='lista_produto.php';
                    }, 2000);
                    alert('Alterado com sucesso');
                </script>";
        else 
            echo "<script>
                    alert('Erro na alteração');,
                    setTimeout(function() {
                    window.location.href='lista_produto.php';
                    }, 2000);
                 </script>";
        
    ?>
    
</body>
</html>