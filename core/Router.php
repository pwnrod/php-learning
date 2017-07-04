<?php

class Router
{
    // Ultimately, this is where our routes will be stored
    protected $routes = [];

    // Static function that creates an instance of the Router class,
    // loads up the file passed to it and returns $router as a Router object
    public static function load($file) {
        $router = new static;

        require $file;

        return $router;
    }

    // Sets up the routes with our routes.php file
    public function define($routes)
    {
        $this->routes = $routes;
    }

    //Searches through the keys of our routes array to find a match
    public function direct($uri)
    {
        // Takes the key passed in and an array of routes
        // If the key exists, returns the value of that key
        if (array_key_exists($uri, $this->routes)) {
            return $this->routes[$uri];
        }

        throw new Exception('No route defined for this URI.');
    }
}