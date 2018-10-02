<?php include 'head.php'; include 'config.php' ?>
<?php
    $query = "SELECT ID, NOME, CODIGO, QUANTIDADE, PRECOCUSTO, PRECOVENDA FROM CONTROLE WHERE ID=".$_GET['id'];
	$result = $con->query($query);
	$controle = $result->fetch_array(MYSQLI_ASSOC);
?>			
<div class="container">

<h1 class="my-4">Controle - Atualização</h1>

<div class="row">
<form id="form1" name="form1" method="post" action="update-controle.php">

<input type="hidden" name="id" id="id" required <?php echo ' value="'.$controle['ID'].'"'; ?> />

<div class="form-group">
  <label class="col-md-12 control-label" for="textinput">Nome</label>  
  <div class="col-md-12">
  <input type="text" name="nome" id="nome" required <?php echo ' value="'.$controle['NOME'].'"'; ?> placeholder="Informe o nome" class="form-control input-md" />
  </div>
</div>

<div class="form-group">
  <label class="col-md-12 control-label" for="textinput">Código</label>  
  <div class="col-md-12">
  <input type="text" name="codigo" id="codigo"  required <?php echo ' value="'.$controle['CODIGO'].'"'; ?> placeholder="Informe o código" class="form-control input-md" />
  </div>
</div>


<div class="form-group">
  <label class="col-md-12 control-label" for="textinput">Quantidade</label>  
  <div class="col-md-12">
  <input type="text" name="quantidade" id="quantidade"  required <?php echo ' value="'.$controle['QUANTIDADE'].'"'; ?> placeholder="Informe a quantidade" class="form-control input-md" />
  </div>
</div>


<div class="form-group">
  <label class="col-md-12 control-label" for="textinput">Preço de Custo</label>  
  <div class="col-md-12">
  <input type="text" name="precoCusto" id="precoCusto"  required <?php echo ' value="'.$controle['PRECOCUSTO'].'"'; ?> placeholder="Informe o Custo" class="form-control input-md" />
  </div>
</div>


<div class="form-group">
  <label class="col-md-12 control-label" for="textinput">Preço de Venda</label>  
  <div class="col-md-12">
  <input type="text" name="precoVenda" id="precoVenda"  required <?php echo ' value="'.$controle['PRECOVENDA'].'"'; ?> placeholder="Informe a Vendas" class="form-control input-md" />
  </div>
</div>

<!-- Button (Double) -->
<div class="form-group">
  <div class="col-md-12">
    <button id="button1id" name="button1id" class="btn btn-success"  type="submit" >Salvar</button>
    <button id="button2id" name="button2id" class="btn btn-danger" type="reset">Limpar</button>
  </div>
</div>


<br class="clear" /> 
</form>
</div>

</div>

<?php include 'footer.php' ?>