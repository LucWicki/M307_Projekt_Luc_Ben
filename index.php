<?php
require 'core/bootstrap.php';

$routes = [
	'/verleihe/erfassen' => 'VerleihController@index',
	'/verleihe/uebersicht' => 'VerleihController@uebersicht',
];

$db = [
	'name'     => 'hippibankdb',
	'username' => 'root',
	'password' => '', 
];

$router = new Router($routes);
$router->run($_GET['url'] ?? '');