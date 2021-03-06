<?php
	// Erez Aton - 311530539
	// Rephael Khanokayev - 312064041

	//Include all files
	require 'config.php';
	require 'db.php';
	require 'func.php';
	require 'products.php';
	
	$lastActive = getAndSaveActive();
	$products = new Products($mysqli);

	if(isset($_GET['product'])){ //Ajax calls
		if ($_SERVER['REQUEST_METHOD'] === 'GET') {
			require 'ajax/list.php';
		} elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
			require 'ajax/new.php';
		} elseif ($_SERVER['REQUEST_METHOD'] === 'DELETE') {
			require 'ajax/delete.php';
		} elseif ($_SERVER['REQUEST_METHOD'] === 'PUT') {
			require 'ajax/update.php';
		} else{
			err('Invalid endpoint');
		}
	} else{ //HTML page
		require 'template/header.php';
		require 'template/index.php';
		require 'template/modals.php';
		require 'template/footer.php';
	}