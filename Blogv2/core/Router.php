<?php 

class Router
{
	protected $routes = [
		'GET' => [],
		'POST' => []
	];

	// public function define($route)
	// {
	// 	$this->routes = $route;
	// }

	public function get($url,$controller)
	{
		$this->routes['GET'][$url] = $controller;
	}

	public function post($url,$controller)
	{
		$this->routes['POST'][$url] = $controller;
	}
	/*
		@params $url => about
		@parms $requestType => Server Request -> GET|POST
	*/
	public function direct($url,$requestType) 
	{
		if(array_key_exists($url, $this->routes[$requestType])){
			return $this->routes[$requestType][$url];  
		}
		throw new Exception('No route found');
	}

	public static function load($file)
	{
		$routes = new static;

		require $file;

		return $routes;
	}
}
