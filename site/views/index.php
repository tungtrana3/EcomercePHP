<?php
	require('../views/layouts/header.php');

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
			// require('../views/home/home.php');
			require('../views/products/detailProduct.php');
			break;
	}

	require('../views/layouts/footer.php');