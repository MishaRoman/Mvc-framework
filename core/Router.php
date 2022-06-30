<?php

namespace app\core;

class Router
{
	private Request $request;
	private array $routes = [];

	public function __construct(Request $request)
	{
		$this->request = $request;
	}

	public function get($path, $callback)
	{
		$this->routes['get'][$path] = $callback;
	}

	public function resolve()
	{
		$path = $this->request->getPath();
		$method = $this->request->getMethod();
		$callback = $this->routes[$method][$path] ?? false;
		
		if (!$callback) {
            return 'Not Found';
        }
		echo call_user_func($callback);
	}
}