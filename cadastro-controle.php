<?php include 'head.php' ?>

<div class="container">

<h1 class="my-4">Controle - Cadastro</h1>

<div class="row">
<form id="form1" name="form1" method="post" action="salvar-controle.php">

<div class="form-group">
  <label class="col-md-12 control-label" for="textinput">Nome</label>  
  <div class="col-md-12">
  <input type="text" name="nome" id="nome" required placeholder="Informe o nome" class="form-control input-md" />
  </div>
</div>

<div class="form-group">
  <label class="col-md-12 control-label" for="textinput">Código</label>  
  <div class="col-md-12">
  <input type="text" name="codigo" id="codigo" required placeholder="Informe o código" class="form-control input-md" />
  </div>
</div>


<div class="form-group">
  <label class="col-md-12 control-label" for="textinput">Quantidade</label>  
  <div class="col-md-12">
  <input type="text" name="quantidade" id="quantidade" required placeholder="Informe a quantidade" class="form-control input-md" />
  </div>
</div>


<div class="form-group">
  <label class="col-md-12 control-label" for="textinput">Preço de Custo</label>  
  <div class="col-md-12">
  <input type="text" name="precoCusto" id="precoCusto" required placeholder="Informe o Custo" class="form-control input-md" />
  </div>
</div>


<div class="form-group">
  <label class="col-md-12 control-label" for="textinput">Preço de Venda</label>  
  <div class="col-md-12">
  <input type="text" name="precoVenda" id="precoVenda" required placeholder="Informe a Vendas" class="form-control input-md" />
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