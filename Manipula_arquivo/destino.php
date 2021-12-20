<?php

	// Receber os dados dos formulario

	$dados = $_GET;
	//var_dump($dados);

	//Converter a array $dados para string
	$dados = implode("", $dados);

	// Salvar dados em um arquivo de texto
	$arquivo = fopen("usuarios.txt","a+");
	//var_dump($arquivo);
	fwrite($arquivo, $dados."\n" );
	fclose($arquivo);

	//Exibe mensagem do cadastramento
	echo "Usuário/a " ."$dados". " cadastrado/a com sucesso!";

?>
