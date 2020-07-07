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

	function getAndSaveActive(){
		$filename = __DIR__.'/active.data';
		if(!file_exists($filename)){
			$last = 0;
		} else {
			$last = file_get_contents($filename);
		}

		file_put_contents($filename,time());
		return $last;
	}