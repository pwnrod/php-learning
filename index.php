<?php
// The entry way into the site. It pulls in the bootstrap file and uses the
// Router class to direct traffic

require 'core/bootstrap.php';

// Creates a new Router object containing 'routes.php'. Using this new instance
// it calls direct(), which expects a URI. We pass a neatly trimmed URI using
// our Request static method
require Router::load('routes.php')
    ->direct(Request::uri(), Request::method());