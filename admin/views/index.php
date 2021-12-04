<?php
	session_start(); 
	ob_start();
	require __DIR__ . '/../config/config.php';
	require('../views/layouts/headTag.php');
	require('../model/Database.php');
	$db = new Database;
	$db->connect();

	/*Xử lý các request*/
	
		
	if (isset($_GET['controller'])) {
		$controller = $_GET['controller'];
		echo("<script>console.log('PHP: " . ($_GET['controller']) . "');</script>");
		require '../route/web.php';
	} else {
		echo("<script>console.log('àdasfasdfdsfasdfasdf:  ');</script>");
		require('../views/user/login.php');
	}
	$db->closeDatabase();
?>