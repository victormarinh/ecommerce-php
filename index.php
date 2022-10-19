<?php 

require_once("vendor/autoload.php");

use Hcode\DB;

$app = new \Slim\Slim();

$app->config('debug', true);

$app->get('/', function() {
    
	echo "Mama mia";

	$sql = new Sql();

	$results = $sql->select("SELECT * FROM tb_users");

	echo json_encode($results);

});

$app->run();


 ?>