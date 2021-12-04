<?php
	session_start(); 
	ob_start();
	require __DIR__ . '/../config/config.php';
	require('../views/layouts/headTag.php');
	require('../model/Database.php');
	$db = new Database;
	$db->connect();

	/*Xử lý các request*/
	if (!empty($_SESSION['useradmin']) ) {
		if (isset($_GET['controller'])) {
			echo("<script>console.log('log 1111111111111111:  qưeqwew');</script>");
			$controller = $_GET['controller'];
			echo("<script>console.log('PHP: " . ($_GET['controller']) . "');</script>");
			require('../views/layouts/header.php');
			require '../route/web.php';
			require('../views/layouts/footer.php');
		} else {
			require('../controlers/login.php'); /*require controller tương ứng*/
		$request = new Login(); /*khởi tạo một class controller tương ứng với biến $controller*/
		echo("<script>console.log('log in22222:333  ');</script>");
		}
	} else {
		require('../controlers/login.php'); /*require controller tương ứng*/
		$request = new Login(); /*khởi tạo một class controller tương ứng với biến $controller*/
		echo("<script>console.log('log in22222:333  ');</script>");
	}
	$db->closeDatabase();
?>