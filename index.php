<?php

require 'vendor/autoload.php';
require 'core/bootstrap.php';

use App\Core\{Router, Request};

// Creates a new Router object containing 'routes.php'. Using this new instance
// it calls direct(), which expects a URI. We pass a neatly trimmed URI using
// our Request static method
Router::load('app/routes.php')
    ->direct(Request::uri(), Request::method());