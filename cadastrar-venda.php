<?php include 'head.php'; include 'config.php'; ?>

<div class="container">

<h1 class="my-4">Controle - Cadastro</h1>

<div class="row">
<form id="form1" name="form1" method="post" action="salvar-venda.php">
<div class="form-group">
<label class="col-md-12 control-label" for="textinput">Item</label>  
<div class="col-md-12">
<select id="codigo" name="codigo" class="form-control" required>
<?php
$query = "SELECT CODIGO, PRECOVENDA, QUANTIDADE, NOME FROM CONTROLE ORDER BY CODIGO";

$result = $con->query($query);
while($controle = $result->fetch_array(MYSQLI_ASSOC)){
  $codigo = $controle['CODIGO'];
  $preco = $controle['PRECOVENDA'];
  $qtd = $controle['QUANTIDADE'];
  $nome = $controle['NOME'];
  for ($i = 1; $i <= $qtd; $i++) {
    ?>
    <option value="<?php echo $codigo.$i.'" '; ?> >
    <?php echo "<b>".$codigo.$i."</b> - ".$nome." - R$ ".$preco.",00"; ?>
    </option>
    
    <?php } } ?>
    </select>
  </div>
    </div>
    
    <div class="form-group">
    <label class="col-md-12 control-label" for="textinput">Preço de Venda</label>  
    <div class="col-md-12">
    <input type="text" name="precoVenda" id="precoVenda" required placeholder="Informe o valor da Venda R$" class="form-control input-md" />
    </div>
    </div>
    
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