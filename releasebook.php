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



$a=null;
$q  = DB::pdo()->prepare('UPDATE books SET borrower_id=NULL WHERE book_id=:bo ');
$q->bindValue(':bo', $_COOKIE['profile_viewer_uid']);

$q->execute();
  



?>