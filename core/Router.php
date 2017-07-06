<?php

class Router
{
    // Ultimately, this is where our routes will be stored
    protected $routes = [
        'GET' => [],
        'POST' => []
    ];

    // Static function that creates an instance of the Router class,
    // loads up the file passed to it and returns $router as a Router object
    public static function load($file) {
        $router = new static;

        require $file;

        return $router;
    }

    public function get($uri, $controller) {
        $this->routes['GET'][$uri] = $controller;
    }

    public function post($uri, $controller) {
        $this->routes['POST'][$uri] = $controller;
    }

    //Searches through the keys of our routes array to find a match
    public function direct($uri, $requestType)
    {
        // Takes the key passed in and an array of routes
        // If the key exists, returns the value of that key
        if (array_key_exists($uri, $this->routes[$requestType])) {
            return $this->routes[$requestType][$uri];
        }

        throw new Exception('No route defined for this URI.');
    }
}