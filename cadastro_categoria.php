<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CAdastro de Produto</title>
</head>
<body>
    <?php
        /*1- Chamando o arquivo de conexão*/
        require  "conexao.php";

        /*2- pegando os dados vindo do formulario*/
        $n=$_POST["nome"];
        $p=$_POST["preco"];
        $c=$_POST["categoria"];

        /*3- Crinando o comando sql para inserção do registro*/
        $comandoSql="insert into TBPRODUTO (NOMEPROD, PRECOPROD, CODCATE) VALUES ('$n', $p, $c)";
        
        //echo "$comandoSql";

        /*4- executando o comando sql */
        $resultado= mysqli_query($con, $comandoSql);

        /*5- verificando se o comando sql foi execultado*/
        if($resultado==true)
            echo "<script> 
                    setTimeout(function() {
                    window.location.href='lista_produto.php';
                    }, 2000);
                    
                    alert('Cadastrado com sucesso'); 
                </script>";
        else 
            echo "<script> alert('Erro no cadastro');
                    setTimeout(function() {
                    window.location.href='frm_cadastra_produto.php';
                    }, 2000);
                 </script>";
        
    ?>
    
</body>
</html>