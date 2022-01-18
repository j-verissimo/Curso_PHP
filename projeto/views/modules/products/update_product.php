<hr>
<h3>Atualizar Produto</h3>
<hr>
<div class="container">
		<form action="<?=$GLOBALS['index'];?>/controller/Product.php" method="POST">
			<div class="row">

			  <div class="mb-3 col-md-6">
			    <label for="exampleInputPassword1" class="form-label">Nome do Produto</label>
			    <input type="text" value="<?=$product[0]['product_name'];?>" name="product_name" class="form-control" id="exampleInputPassword1">
			  </div>

			  <div class="mb-3 col-md-6">
			    <label for="exampleInputPassword1" class="form-label">Categoria do Produto</label>
			    <input type="text" value="<?=$product[0]['product_category'];?>" name="product_category" class="form-control" id="exampleInputPassword1">
			  </div>

			  <div class="mb-3 col-md-6">
			    <label for="exampleInputPassword1" class="form-label">Qtde em Estoque</label>
			    <input type="text" value="<?=$product[0]['product_stock'];?>" name="product_stock" class="form-control" id="exampleInputPassword1">
			  </div>

			  <div class="mb-3 col-md-6">
			    <label for="exampleInputPassword1" class="form-label">Fornecedor do Produto</label>
			    <input type="text" value="<?=$product[0]['product_provider'];?>" name="product_provider" class="form-control" id="exampleInputPassword1">
			  </div>
			  <input type="hidden" name="action" value="edit">
			  <input type="hidden" name="id_product" value="<?=$product[0]['id_product'];?>">
			  <div class="col-md-4"><button type="submit" class="btn btn-warning">Atualizar Produto</button></div>
			</div>
		</form>
</div>
