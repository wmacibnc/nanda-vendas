<?php
include 'config.php';
$sql = 'DELETE FROM CONTROLE WHERE ID='.$_GET['id'];
  mysqli_query($con, $sql) or die ('ERRO: '.mysql_error());
  header("Location: controle.php?mensagem=Dados excluidos! ");

?>