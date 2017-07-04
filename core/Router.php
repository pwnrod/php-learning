<?php

class Router
{
    // Ultimately, this is where our routes will be stored
    protected $routes = [];

    public static function load($file) {
        $router = new static;

        require $file;

        return $router;
    }

    // Takes an array and passes it to $routes
    public function define($routes)
    {
        $this->routes = $routes;
    }

    //Searches through the keys of our routes array to find a match
    public function direct($uri)
    {
        if (array_key_exists($uri, $this->routes)) {
            return $this->routes[$uri];
        }

        throw new Exception('No route defined for this URI.');
    }
}