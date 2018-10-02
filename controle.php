<?php include 'head.php' ?>
<?php include 'config.php' ?>

<div class="container">

<h1 class="my-4">Controle</h1>

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
  <?php
  $queryEstoque = "SELECT SUM(QUANTIDADE*PRECOCUSTO) as TOTALCUSTO, SUM(QUANTIDADE*PRECOVENDA)  as TOTALVENDA FROM CONTROLE ";
  $resultEstoque = $con->query($queryEstoque);
  while($estoque = $resultEstoque->fetch_array(MYSQLI_ASSOC)) {
    //echo '<h6> Total Custo R$ '.$estoque['TOTALCUSTO'].',00</h6>';
    echo '<button type="button" class="btn btn-info">Total em Estoque para Venda R$ '.$estoque['TOTALVENDA'].',00</button>';
  }
  $queryVendido = "SELECT SUM(VALOR) AS TOTALVENDIDO FROM VENDA";
  $resultVendido = $con->query($queryVendido);
  while($vendido = $resultVendido->fetch_array(MYSQLI_ASSOC)) {
    //echo '<h6> Total Custo R$ '.$estoque['TOTALCUSTO'].',00</h6>';
    echo '<button type="button" class="btn btn-sucess">Total Vendido R$ '.$vendido['TOTALVENDIDO'].',00</button>';
  }
  ?>
  <a href="cadastro-controle.php"><button type="button" class="btn btn-success"><i class="fa fa-fw fa-plus-square"></i>Novo</button></a>
  </div>
  <br /><br />
  </div>
  
  
  <div class="card mb-3">
  <div class="card-header">
  <i class="fa fa-table"></i> Controle</div>
  <div class="card-body">
  <div class="table-responsive">
  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
  <thead>
  <tr>
  <th>*</th>
  <th>Nome</th>
  <th>Código</th>
  <th>Qtd</th>
  <th>Preço Custo</th>
  <th>Preço Venda</th>
  <th>Ação</th>
  </tr>
  </thead>
  <tbody>
  <?php
  $query = "
  SELECT ID,NOME,CODIGO,QUANTIDADE,PRECOCUSTO,PRECOVENDA from CONTROLE ORDER BY NOME asc";
  
  $result = $con->query($query);
  while($produto = $result->fetch_array(MYSQLI_ASSOC)){
    echo '<tr>';
    echo '<td>';
    echo $produto['ID'];
    echo '</td>';
    echo '<td>';
    echo $produto['NOME'];
    echo '</td>';
    echo '<td>';
    echo $produto['CODIGO'];
    echo '</td>';
    echo '<td>';
    echo $produto['QUANTIDADE'];
    echo '</td>';
    echo '<td>';
    echo $produto['PRECOCUSTO'];
    echo '</td>';
    echo '<td>';
    echo $produto['PRECOVENDA'];
    echo '</td>';
    
    echo '<td>';
    $id = $produto['ID'];
    echo '<a href="atualizar-controle.php?id='.$id.'"><button type="button" class="btn btn-warning" title="Editar">Editar</button></a>
    <a href="excluir-controle.php?id='.$id.'"><button type="button" class="btn btn-danger" title="Excluir">Excluir</button></a>';
    echo '</td>';
    echo '</tr>';
  }
  ?>
  </tbody>
  </table>
  </div>
  </div>
  </div>
  </div>
  </div>
  </div>
  
  
  </div>
  
  </div>
  
  <?php include 'footer.php' ?>