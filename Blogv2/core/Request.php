<?php 

class Request
{
	public static function url()
	{
		// return trim($_SERVER['REQUEST_URI'],'/');   
		return trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH),'/');
	}

	public static function method()
	{
		return $_SERVER['REQUEST_METHOD'];
	}
}