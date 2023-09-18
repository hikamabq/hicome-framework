<?php 
require_once '../vendor/hikamabq/hicome/init.php';
require_once '../app/db.php';
require_once '../config.php';
define('base_url', $config['base_url']);
define('url', $config['base_url'].'/public/');

$route = new Route();