<?php

	// Receber os dados dos formulario

	$dados = $_POST;


	//Converter a array $dados para string
	$dados = implode(" - ", $dados);

	 
	// Salvar dados em um arquivo de texto
	$arquivo = fopen("cadastro-produtos.txt","a+");
	//var_dump($arquivo);
	fwrite($arquivo, $dados."\n" );
	fclose($arquivo);

	// Redireconamento
	header("location: listarQuestao7.php");



?>
