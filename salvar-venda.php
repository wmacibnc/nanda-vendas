<?php
include("config.php"); 

 $codigo = $_POST['codigo'];
 $precoVenda = $_POST['precoVenda'];

 $query = <<<QUERY
 INSERT INTO Venda(
    codigo, valor)
   VALUES (
    '$codigo','$precoVenda'
   )
QUERY;

 mysqli_query($con, $query) or die ('ERRO: '.mysql_error());
 header("Location: index.php?mensagem=Vendido! "); /* Redirect browser */

?>