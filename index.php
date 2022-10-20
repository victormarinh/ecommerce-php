<?php 

require_once("vendor/autoload.php");

use Hcode\Page;
use Hcode\PageAdmin;

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

$app->run();

 ?>