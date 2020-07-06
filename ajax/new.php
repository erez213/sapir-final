<?php
	if(!isset($_GET['product']) || $_GET['product'] != 'new')err('Invalid endpoint');
	
	$name = $_POST['name'];
	$description = $_POST['description'];
	$price = $_POST['price'];
	if(is_numeric($price))$price = $price+0; //Hack to cast to int
	$image = $_POST['picture'];
	
	if($name == '')err('No name');
	if($description == '')err('No description');
	if($price == '')err('No price');
	if(!is_float($price) && !is_int($price))err('Price must be a number');
	if($image == '')err('No image');
	if(!filter_var($image, FILTER_VALIDATE_URL))err('Image must be valid URL');
	
	//Everything checks out fine -> create the product
	$mysqli->query("INSERT INTO `product` (`name`,`description`,`price`,`picture`) VALUES ('".esc($name)."','".esc($description)."','".esc($price)."','".esc($image)."')");
	
	ok([]);