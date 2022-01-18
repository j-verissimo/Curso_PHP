<hr>
<h3>
	Lista de Produtos | <a href="?op=add_product" class="btn btn-primary btn-sm"> Adicionar </a>
</h3>
<hr>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nome</th>
              <th scope="col">Categoria</th>
              <th scope="col">Qtde em Estoque</th>
              <th scope="col">Fornecedor</th>
              <th scope="col">Ações</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($products as $p): ?>
            	<tr>
	              <td><?=$p['id_product'];?></td>
	              <td><?=$p['product_name'];?></td>
	              <td><?=$p['product_category'];?></td>
	              <td><?=$p['product_stock'];?></td>
	              <td><?=$p['product_provider'];?></td>
	              <td>
	              	<a href="?op=update_product&id=<?=$p['id_product'];?>" class="btn btn-warning btn-sm"> <i class="fa fa-edit"></i></a>

	              	<button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#produto-<?=$p['id_product'];?>">
	              		<i class="fa fa-trash"></i>
	              	</button>

					<!-- Modal -->
					<div class="modal fade" id="produto-<?=$p['id_product'];?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
					  <div class="modal-dialog">
					    <div class="modal-content">
					      <div class="modal-header">
					        <h5 class="modal-title" id="exampleModalLabel">Excluir <?=$p['product_name'];?></h5>
					        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					      </div>
					      <form action="<?=$GLOBALS['index'];?>/controller/Product.php" method="POST">
						      <div class="modal-body">
						        <h3> Tem certeza que deseja excluir? Essa operação nao podera ser desfeita! </h3>
						        <input type="hidden" name="id_product" value="<?=$p['id_product'];?>">
						        <input type="hidden" name="action" value="delete">
						      </div>
						      <div class="modal-footer">
						        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
						        <button type="submit" class="btn btn-primary">Continuar</button>
						      </div>
					  	  </form>
					    </div>
					  </div>
					</div>


	              </td>
            	</tr>
	        <?php endforeach; ?>

          </tbody>
        </table>
      </div>
