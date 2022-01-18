<?php  

	include_once dirname(__DIR__).'/models/config.php';
	include_once $project_path.'/models/classes/Connect.class.php';
	include_once $project_path.'/models/classes/Manager.class.php';

	// Recebendo os dados do formulário
	$email = $_POST['email'];
	$pass = $_POST['password'];


	// Criar um objeto do tipo manager
	$manager = new Manager;

	// Buscar o email digitado no banco de dados
	$log = $manager->select_common("tb_users", null, ["user_email"=>$email], " limit 1");
	
	// TRatando o login
	if(!$log){
		header("location: $project_index/index.php?msg=user_not_found");
	}elseif($log[0]['user_password'] != sha1($pass)){
		header("location: $project_index/index.php?msg=password_incorrect");
	}else{
		session_start();
		$_SESSION[md5("user_data")] = $log[0];
		header("location: $project_index/index.php");
	}

?>