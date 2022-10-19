<?php 

require_once("vendor/autoload.php");

$app = new \Slim\Slim();

$app->config('debug', true);

$app->get('/', function() {
    
	echo "Ok";

	$sql = new Hcode\DB\Sql();

	$results = $sql->select("SELECT * FROM tb_persons;");

	echo "<pre>";
		print_r($results);
	echo "</pre>";
});

$app->run();

 ?>