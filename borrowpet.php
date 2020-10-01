<?php
session_start();
require 'database.class.php';
require 'db_connection.php';
DB::init(
		'localhost:3306',
		'vkids',
		'root',
		''
	);




   $q  = DB::pdo()->prepare('UPDATE pets SET borrower_id=:idu WHERE pet_id=:bo ');
 $q->bindValue(':idu', $_SESSION['iduser']);
$q->bindValue(':bo', $_COOKIE['profile_viewer_uid']);

$q->execute();
  



?>