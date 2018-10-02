<?php include 'head.php' ?>
<?php include 'config.php' ?>

<div class="container">

<h1 class="my-4">Nanda Sonhos de Boneca</h1>

<div class="row">

<div class="row">
<div class="col-12">
<?php if(isset($_GET['mensagem'])){ ?>
  <div class="alert alert-success alert-dismissable">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Sucesso!</strong> <?php echo $_GET['mensagem']; ?>
  </div>
  <?php } ?>
  <div class="row">
  <div class="col-12">
  <a href="cadastrar-venda.php"><button type="button" class="btn btn-warning"><i class="fa fa-fw fa-plus-square"></i>Nova Venda</button></a>
  </div>
  <br /><br />
  </div>
  
  
  <?php
  
  $query = "SELECT ID,NOME,CODIGO,QUANTIDADE,PRECOCUSTO,PRECOVENDA from CONTROLE ORDER BY CODIGO asc";
  $queryVenda = "SELECT CODIGO from VENDA";

  $result = $con->query($query);
  $resultVenda = $con->query($queryVenda);
  
  $vendas = array();
  while($row = $resultVenda->fetch_array(MYSQLI_ASSOC)) {
    array_push($vendas,$row['CODIGO']);
  }
  
  while($produto = $result->fetch_array(MYSQLI_ASSOC)){
    echo "<h5>".$produto['NOME']." - R$ ".$produto['PRECOVENDA'].",00 </h5>";
    $qtd = $produto['QUANTIDADE'];
    for ($i = 1; $i <= $qtd; $i++) {
      $valor = $produto['CODIGO'].$i;
      if (in_array($valor, $vendas)) { 
        echo '<button style="margin-left:10px; margin-top:5px;" type="button" class="btn btn-warn">'.$produto['CODIGO'].$i." </button>";
      }else{
        echo '<button style="margin-left:10px; margin-top:5px;" type="button" class="btn btn-success">'.$produto['CODIGO'].$i." </button>";
      } 
      
    }
    echo "<br /> <br />";
    
    
    $id = $produto['ID'];
  }
  ?>
  </div>
  </div>
  </div>
  </div>
  </div>
  
  
  </div>
  
  </div>
  
  <?php include 'footer.php' ?>