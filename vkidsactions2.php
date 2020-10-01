<?php
require 'database.class.php';
require 'db_connection.php';
DB::init(
		'localhost:3306',
		'vkids',
		'root',
		''
	);




$somevar =  $_COOKIE['profile_viewer_uid'];

//$pet=substr($peturl, 44);
    $q  = DB::pdo()->prepare('DELETE FROM books WHERE book_id=:bo ');
$q->bindValue(':bo', $somevar );

$q->execute();










 

?>