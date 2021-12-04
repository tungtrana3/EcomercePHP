<?php
	require('../views/layouts/headTag.php');

	if (isset($_GET['controller'])) {
		$controller = $_GET['controller'];
	} else {
		$controller = '';
	}

	switch ($controller) {
		case 'test':
			// require('../views/home/home.php');
			break;
		
		default:
			require('../views/home/home.php');
			// require('../views/home/home.php');
			// require('../views/products/detailProduct.php');
			break;
	}

	require('../views/layouts/footer.php');