<?php
	if(!isset($_GET['product']) || !is_numeric($_GET['product']))err('Invalid endpoint');
	
	if(!$products->isExists($_GET['product']))err('Invalid ID');
	
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
	$products->update($_GET['product'],$name,$description,$price,$image);
	
	ok([]);