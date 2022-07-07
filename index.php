<?php
require 'core/bootstrap.php';

$routes = [
	'/hallo/welt' => 'WelcomeController@index',
	'/verleihe/erfassen' => 'VerleihController@erfassen',
	'/verleihe/uebersicht' => 'VerleihController@uebersicht',
];

$db = [
	'name'     => 'hippibankdb',
	'username' => 'root',
	'password' => '', 
];

$router = new Router($routes);
$router->run($_GET['url'] ?? '');