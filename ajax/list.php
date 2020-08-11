<?php
	if(!isset($_GET['product']) || $_GET['product'] != 'all')err('Invalid endpoint');
	
	$list = $products->all();
	
	ok(['list'=>$list]);