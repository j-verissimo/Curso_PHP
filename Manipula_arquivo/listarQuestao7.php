<?php
	//Ler o arquivo cadastro e transformando-o em uma array
	$dados = file('cadastro-produtos.txt');
	//var_dump($dados);
?>

<html>
<head>
		<title> Questao 7 - Listagem de Produtos </title>
	
	<!-- Bootstrap-->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

	<!-- Font Awesome-->
	<!-- <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"> -->

</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h3> Listagem de Produtos</h3>
				<table class="table table-striped table-hover table-bordered">
					 <thead class="text-center">
					 	<th>Nome do Produto</th>
					 	<th>Quantidade</th>
					 	<th>Preço</th>						
					 </thead>
					 <tbody>
					 	<!-- Iteração com nosso arquivo e apresentação na tabela dinamicamente-->
					 	<?php foreach($dados as $key=>$dado): ?>
					 		<?php $cadastro = explode(" - ",$dado); 
				 		
					 		?>
					 		<tr>
					 			<!-- foreach interno-->
					 			<?php foreach($cadastro as $valor): ?>
					 				<td align="center"><?=$valor;?></td> 
					 			<?php endforeach;    ?>		 										

					 		</tr>
						<?php endforeach;?>   
					</tbody> 
			    </table>
			    <!-- Linkando com form.php -->
				<a href="formQuestao7.html" class = "btn btn-primary">
				<i class = "fa fa-pus-square">Adicionar</i>
				</a>

				<hr>
			</div>	
		</div>
	</div>
</body>
</html>
