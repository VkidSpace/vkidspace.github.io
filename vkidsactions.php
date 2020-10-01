<?php
require 'database.class.php';
require 'db_connection.php';
DB::init(
		'localhost:3306',
		'vkids',
		'root',
		''
	);




    $url = $_SERVER["REQUEST_URI"];
$somevar =  $_COOKIE['profile_viewer_uid'];

//$pet=substr($peturl, 44);
    $q  = DB::pdo()->prepare('DELETE FROM pets WHERE pet_id=:bo ');
$q->bindValue(':bo', $somevar );

$q->execute();
  









 

?>