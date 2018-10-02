<?php
ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);

include("config.php"); 

 $codigo = $_POST['codigo'];
 $precoVenda = $_POST['precoVenda'];

 $query = <<<QUERY
 INSERT INTO VENDA(
    CODIGO, VALOR)
   VALUES (
    '$codigo','$precoVenda'
   )
QUERY;

 mysqli_query($con, $query) or die ('ERRO: '.mysql_error());
 header("Location: index.php?mensagem=Vendido! "); /* Redirect browser */

?>