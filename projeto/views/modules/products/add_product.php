<hr>
<h3>
	Adicionar Produto
</h3>
<hr>
<div class="container">
		<form action="<?=$GLOBALS['index'];?>/controller/Product.php" method="POST">
			<div class="row">

			  <div class="mb-3 col-md-6">
			    <label for="exampleInputPassword1" class="form-label">Nome do Produto</label>
			    <input type="text" name="product_name" class="form-control" id="exampleInputPassword1">
			  </div>

			  <div class="mb-3 col-md-6">
			    <label for="exampleInputPassword1" class="form-label">Categoria do Produto</label>
			    <input type="text" name="product_category" class="form-control" id="exampleInputPassword1">
			  </div>

			  <div class="mb-3 col-md-6">
			    <label for="exampleInputPassword1" class="form-label">Qtde em Estoque</label>
			    <input type="text" name="product_stock" class="form-control" id="exampleInputPassword1">
			  </div>

			  <div class="mb-3 col-md-6">
			    <label for="exampleInputPassword1" class="form-label">Fornecedor do Produto</label>
			    <input type="text" name="product_provider" class="form-control" id="exampleInputPassword1">
			  </div>
			  <input type="hidden" name="action" value="add">
			  <div class="col-md-4"><button type="submit" class="btn btn-primary">Cadastrar Produto</button></div>
			</div>
		</form>
</div>
