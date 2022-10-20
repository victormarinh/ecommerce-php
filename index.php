<?php 

require_once("vendor/autoload.php");

use Hcode\Page;

$app = new \Slim\Slim();

$app->config('debug', true);

$app->get('/', function() {
    
	//echo "Ok";

	$page = new Page();

	$page->setTpl("index", array(), false);
	
});

$app->run();

 ?>