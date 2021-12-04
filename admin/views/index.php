<?php
	// require('../views/layouts/header.php');
	require('../views/layouts/headTag.php');
	require('../model/Database.php');
	$db = new Database;
	$db->connect();

	/*Xử lý các request*/

	if (isset($_GET['controller'])) {
		$controller = $_GET['controller'];
	} else {
		$controller = '';
	}

	switch ($controller) {
		case 'test':
			echo "trang test";
			break;
		
		default:
			require('../views/user/login.php');
			break;
	}
	$db->closeDatabase();
?>
	<!-- // require('../views/layouts/footer.php'); -->