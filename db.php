<?php
	$mysqli = new mysqli($DBConInfo['server'], $DBConInfo['username'], $DBConInfo['password'], $DBConInfo['name']);
	if ($mysqli->connect_error) die("mySQL error.");
	
	$mysqli->query("SET NAMES 'UTF8' COLLATE 'utf8_general_ci'");
	$mysqli->query("set character_set_client='utf8'");
	$mysqli->query("set character_set_results='utf8'");
	$mysqli->query("set collation_connection='utf8_general_ci'");