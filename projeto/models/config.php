<?php  

	// Pasta do projeto
	$project_name = "/projeto";
	
	// Rota de url
	$project_index = "http://".$_SERVER['SERVER_NAME'].$project_name;

	// Rota de diretorio
	$project_path = $_SERVER['DOCUMENT_ROOT'].$project_name;

	// VARIAVEIS GLOBAIS (PARA USO NAS FUNCOES)
	$GLOBALS['index'] = $project_index;
	$GLOBALS['path'] = $project_path;

?>