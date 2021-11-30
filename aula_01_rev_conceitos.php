<?php
	# Criar as variáveis
	$nome = "Turma da  Monica";
	$idade =  11 ;

	# Exibir na tela  html e o processamento do código
echo "
	<strong>Coleção $nome para crianças de até $idade anos!</strong><hr>
	<table border=2>  
		<tr>
			<th> Coleção</th>
			<th> Idade <th>
		</tr>

		<tr>
			<td> $nome  </td>
			<td> $idade  </td>
		</tr>
	</table>	
";
?>
