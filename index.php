<?php 

require_once("vendor/autoload.php");

use Hcode\Page;
use Hcode\PageAdmin;
use Hcode\Model\User;

$app = new \Slim\Slim();

$app->config('debug', true);

$app->get('/', function() {
	
	$page = new Page();

	$page->setTpl("index", array(), false);
	
});

$app->get('/admin', function() {

	$pageAdmin = new PageAdmin();

	$pageAdmin->setTpl("index", array(), false);
	
});

$app->get('/admin/login', function() {

	$pageAdmin = new PageAdmin([
		"header" => false,
		"footer" => false
	]);

	$pageAdmin->setTpl("login", array(), false);
	
});

$app->post('/admin/login', function() {

	User::login($_POST['login'], $_POST['password']);

	header("Location: /admin");

	exit;
	
});

$app->run();

 ?>