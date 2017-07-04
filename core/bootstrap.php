<?php
// Sets up an 'app' array so that you can easily reference or change
// things like configs and databases
$app = [];

$app['config'] = require 'config.php';

require 'core/Router.php';
require 'core/Request.php';
require 'core/database/Connection.php';
require 'core/database/QueryBuilder.php';


$app['database'] = new QueryBuilder(
    Connection::make($app['config']['database'])
);
