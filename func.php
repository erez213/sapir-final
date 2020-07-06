<?php
	//Gets a string and escape it
	function esc($str){
		global $mysqli;
		return $mysqli->real_escape_string($str);
	}
	
	function err($str){
		header('Content-Type: application/json');
		die(json_encode(['status'=>'error','error'=>$str]));
	}
	function ok($data){
		header('Content-Type: application/json');
		die(json_encode(['status'=>'ok','res'=>$data]));
	}