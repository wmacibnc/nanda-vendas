<?php
include("config.php"); 


 //INSERT 
 $nome = $_POST['nome'];
 $codigo = $_POST['codigo'];
 $quantidade = $_POST['quantidade'];
 $precoCusto = $_POST['precoCusto'];
 $precoVenda = $_POST['precoVenda'];
 // Insere os dados no banco 
 $query = <<<QUERY
 INSERT INTO Controle(
    nome,codigo,quantidade,precoCusto,precoVenda)
   VALUES (
    '$nome','$codigo','$quantidade','$precoCusto','$precoVenda'
   )
QUERY;

 mysqli_query($con, $query) or die ('ERRO: '.mysql_error());
 header("Location: controle.php?mensagem=Dados Salvos! "); /* Redirect browser */

?>