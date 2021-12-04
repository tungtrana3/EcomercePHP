<?php
	session_start(); 
	ob_start();
	require __DIR__ . '/../config/config.php';
	require('../views/layouts/headTag.php');
	require('../model/Database.php');
	$db = new Database;
	$db->connect();

	/*Xử lý các request*/
	if (!empty($_SESSION['useradmin']) && $_SESSION['useradmin']['role'] == admin) {
		if (isset($_GET['controller'])) {
			$controller = $_GET['controller'];
			echo("<script>console.log('PHP: " . ($_GET['controller']) . "');</script>");
			require('../views/layouts/header.php');
			
			require '../route/web.php';
			require('../views/layouts/footer.php');
		} else {
			echo("<script>console.log('log in:  ');</script>");
			require('../views/user/login.php');
		}
	} else {
		require('../views/user/login.php');
	}
	$db->closeDatabase();
?>