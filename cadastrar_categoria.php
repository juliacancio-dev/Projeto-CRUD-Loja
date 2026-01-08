<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Categoria</title>
</head>
<body>
    <?php
        /*1- Chamando o arquivo de conexão*/
        require  "conexao.php";

        /*2- pegando os dados vindo do formulario*/
        $c=$_POST["categoria"];

        /*3- Crinando o comando sql para inserção do registro*/
        $comandoSql="insert into TBCATEGORIA (NOMECATE) VALUES ('$c')";
        
        //echo "$comandoSql";

        /*4- executando o comando sql */
        $resultado= mysqli_query($con, $comandoSql);

        /*5- verificando se o comando sql foi execultado*/
        if($resultado==true)
            echo "<script> 
                    setTimeout(function() {
                    window.location.href='lista_categoria.php';
                    }, 2000);
                    
                    alert('Cadastrado com sucesso'); 
                </script>";
        else 
            echo "<script> alert('Erro no cadastro');
                    setTimeout(function() {
                    window.location.href='frm_cadastra_categoria.php';
                    }, 2000);
                 </script>";
        
    ?>
    
</body>
</html>