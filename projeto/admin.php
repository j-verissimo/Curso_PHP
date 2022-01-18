<?php  


	include_once "models/config.php";
	include_once 'controller/validate.php';

	// Função de conteudo da página
	function page_content(){
		validate_options();
	}

	include_once 'views/template.php';


?>