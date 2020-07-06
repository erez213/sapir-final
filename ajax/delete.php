<?php
	if(!isset($_GET['product']) || !is_numeric($_GET['product']))err('Invalid endpoint');
	
	$q = $mysqli->query("SELECT * FROM `product` WHERE `id` = ".esc($_GET['product']));
	if($q->num_rows == 0)err('Invalid ID');
	
	$mysqli->query("DELETE FROM `product` WHERE `id` = ".esc($_GET['product']));
	
	ok([]);