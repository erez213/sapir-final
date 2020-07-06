<?php
	if(!isset($_GET['product']) || !is_numeric($_GET['product']))err('Invalid endpoint');
	
	$q = $mysqli->query("SELECT * FROM `product` WHERE `id` = ".esc($_GET['product']));
	if($q->num_rows == 0)err('Invalid ID');
	
	//Parse the incoming PUT data
	parse_str(file_get_contents("php://input"),$vars);
	
	$name = $vars['name'];
	$description = $vars['description'];
	$price = $vars['price'];
	if(is_numeric($price))$price = $price+0; //Hack to cast to int
	$image = $vars['picture'];
	
	if($name == '')err('No name');
	if($description == '')err('No description');
	if($price == '')err('No price');
	if(!is_float($price) && !is_int($price))err('Price must be a number');
	if($image == '')err('No image');
	if(!filter_var($image, FILTER_VALIDATE_URL))err('Image must be valid URL');
	
	//Everything checks out fine -> UPDATE the product
	$mysqli->query("UPDATE `product` SET `name` = '".esc($name)."', `description` = '".esc($description)."', `price` = '".esc($price)."', `picture` = '".esc($image)."' WHERE `id` = ".esc($_GET['product']));
	
	ok([]);