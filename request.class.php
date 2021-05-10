<?php

class Request {
	public static function get($name){
		return $_GET[$name];
	}
	public static function post($name){
		return $_POST[$name];
	}
	public static function any($name){
		$output = '';
		if(isset($_POST[$name]) && isset($_GET[$name])){
			$output = $_POST[$name];
			$output .= $_GET[$name];
		}else if(isset($_POST[$name])){
			$output = $_POST[$name];
		}else{
			$output = $_GET[$name];
		}
		return $output;
	}
	public static function exists($name){
		return(isset($_POST[$name])) ? true : false;
	}
	public static function redirect($url = ''){
		header("Location: ".$url);
	}
}

?>
