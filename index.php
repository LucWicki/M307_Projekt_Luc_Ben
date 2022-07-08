<?php
require 'core/bootstrap.php';

$routes = [
	'/verleihe/erfassen' => 'VerleihController@index',
	'/verleihe/uebersicht' => 'VerleihController@uebersicht',
	'/verleihe/bearbeiten' => 'VerleihController@erfassen',
	'/verleihe/update' => 'VerleihController@update',
	'/verleihe/edit' => 'VerleihController@edit',
];

$db = [
	'name'     => 'hippibankdb',
	'username' => 'root',
	'password' => '', 
];

$router = new Router($routes);
$router->run($_GET['url'] ?? '');