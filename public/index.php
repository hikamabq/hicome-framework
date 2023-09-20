<?php 
require_once '../vendor/hikamabq/hicome/init.php';
require_once '../config.php';
define('url', $config['base_url']);
define('asset', $config['base_url'].'/public/');
$route = new Route();