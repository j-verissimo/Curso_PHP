<?php  

	/*
	include_once 'models/classes/Connect.class.php';
	include_once 'models/classes/Manager.class.php';

	$manager = new Manager;


	// Inserindo alguem no banco
	$data['user_name'] = "Aurilano";
	$data['user_email'] = "aurilano@email.com";
	$data['user_password'] = sha1('123456');

	// Inserindo os dados
	//echo $manager->insert_common("tb_users",$data, null);
	
	//Mostrando os dados 
	//$todoMundo = $manager->select_common("tb_users",null, null, " Order by user_name desc");

	// Atualizando os dados
	$new['user_name'] = "Adriana Silva";
	$filtro['id_user'] = 2;
	//$manager->update_common("tb_users",$new, $filtro, null);
	//$todoMundo = $manager->select_common("tb_users",null, null, " Order by user_name desc");

	// Excluindo os dados
	$res = $manager->delete_common("tb_users",['id_user'=>3], null);

	echo ($res) ? "Excluido com sucesso!!" : "Erro de exclusao!!";

	$todoMundo = $manager->select_common("tb_users",null, null, " Order by user_name desc");
	print_r($todoMundo);
	*/

	include_once 'models/config.php';
		
	function show(){
		echo "Mostrando...<br>";
		echo "Não Global: ".$project_index."<br>";
		echo "Não Global: ".$project_path."<br>";
		echo "Global: ".$GLOBALS['index']."<br>";
		echo "Global: ".$GLOBALS['path']."<br>";
	}

	show();
?>