<?php  
	
	function validate_options(){

		if(!isset($_GET['op'])){
			return false;
		}

		include_once $GLOBALS['path']."/models/classes/Connect.class.php";
		include_once $GLOBALS['path']."/models/classes/Manager.class.php";

		switch($_GET['op']){

			case 'users':
				$manager = new Manager;
				$users = $manager->select_common("tb_users", null, null, null);
				var_dump($users);	
			break;

			case 'list_products':
				$manager = new Manager;
				$products = $manager->select_common("tb_products", null, null, null);
				include_once $GLOBALS['path']."/views/modules/products/list_products.php";
			break;

			case 'add_product':
				include_once $GLOBALS['path']."/views/modules/products/add_product.php";
			break;

			case 'update_product':
				$manager = new Manager;
				$product = $manager->select_common("tb_products", null, ["id_product"=>$_GET['id']], null);
				include_once $GLOBALS['path']."/views/modules/products/update_product.php";
			break;

		}



	}


?>