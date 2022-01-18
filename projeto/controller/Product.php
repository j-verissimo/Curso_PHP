<?php  

	include_once dirname(__DIR__).'/models/config.php';
	include_once $project_path.'/models/classes/Connect.class.php';
	include_once $project_path.'/models/classes/Manager.class.php';

	switch($_POST['action']){

		case 'add':
			unset($_POST['action']);
			$manager = new Manager;
			$manager->insert_common("tb_products", $_POST, null);
			header("location: $project_index/admin.php?op=list_products&msg=insert_ok");
		break;

		case 'edit':
			unset($_POST['action']);
			$manager = new Manager;
			$manager->update_common("tb_products", $_POST, ['id_product'=>$_POST['id_product']], null);
			header("location: $project_index/admin.php?op=list_products&msg=update_ok");
		break;

		case 'delete':
			unset($_POST['action']);
			$manager = new Manager;
			$manager->delete_common("tb_products", ['id_product'=>$_POST['id_product']], null);
			header("location: $project_index/admin.php?op=list_products&msg=delete_ok");
		break;
	}





?>
