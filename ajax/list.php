<?php
	if(!isset($_GET['product']) || $_GET['product'] != 'all')err('Invalid endpoint');
	
	$list = [];
	$q = $mysqli->query("SELECT `id`, `name`, `description`, `price`, `picture` FROM `product`");
	while($r = $q->fetch_assoc()){
		$list[] = $r;
	}
	
	ok(['list'=>$list]);