<?php
	if(!isset($_GET['product']) || !is_numeric($_GET['product']))err('Invalid endpoint');
	
	if(!$products->isExists($_GET['product']))err('Invalid ID');
	
	$products->del($_GET['product']);
	
	ok([]);