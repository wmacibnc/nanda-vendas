<?php
include("config.php"); 


 //INSERT 
 $id = $_POST['id'];
 $nome = $_POST['nome'];
 $codigo = $_POST['codigo'];
 $quantidade = $_POST['quantidade'];
 $precoCusto = $_POST['precoCusto'];
 $precoVenda = $_POST['precoVenda'];
 
 $query = "UPDATE `CONTROLE` 
SET `nome` = '".$nome."',
`codigo` = '".$codigo."',
`quantidade` = '".$quantidade."',
`precoCusto` = '".$precoCusto."',
`precoVenda` = '".$precoVenda."'
WHERE (`id` = ".$id.")";

 mysqli_query($con, $query) or die ('ERRO: '.mysql_error());
 header("Location: controle.php?mensagem=Dados Alterados! ");

?>