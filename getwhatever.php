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
	

$iduser=$_SESSION['iduser'];

function getanybook() {	
	$q = DB::pdo()->prepare(
 		' SELECT p.* from  books as p '
	);
	$q->execute();
	return $q->fetchAll(2);
}
function getanypet() {	
	$q = DB::pdo()->prepare(
 		' SELECT p.* from  pets as p '
	);
	$q->execute();
	return $q->fetchAll(2);
}
function getanytoy() {	
	$q = DB::pdo()->prepare(
 		' SELECT p.* from  toys as p '
	);
	$q->execute();
	return $q->fetchAll(2);
}
function getanyuser($id) {	
	$q = DB::pdo()->prepare(
 		' SELECT p.* from  user as p where id=:idu '
	);
	$q->bindValue(':idu', $id);
	$q->execute();
	return $q->fetchAll(2);
	
}

function getmybook() {	
	$q = DB::pdo()->prepare(
 		' SELECT p.* from  books as p where seller_id=:idu'
	);
		$q->bindValue(':idu'  , $_SESSION['iduser']);

	$q->execute();
	return $q->fetchAll(2);
}
function getmypet() {	
	$q = DB::pdo()->prepare(
 		' SELECT p.* from  pets as p where seller_id=:idu'
	);
		$q->bindValue(':idu'  , $_SESSION['iduser']);

	$q->execute();
	return $q->fetchAll(2);
}
function getmytoy() {	
	$q = DB::pdo()->prepare(
 		' SELECT p.* from  toys as p where seller_id=:idu'
	);
		$q->bindValue(':idu'  , $_SESSION['iduser']);

	$q->execute();
	return $q->fetchAll(2);
}
function getapet() {	
	$q = DB::pdo()->prepare(
 		' SELECT p.* from  pets as p where seller_id=:idu'
	);
		$q->bindValue(':idu'  , $_COOKIE['profile_uid']);

	$q->execute();
	return $q->fetchAll(2);
}
function getabook() {	
	$q = DB::pdo()->prepare(
 		' SELECT p.* from  books as p where seller_id=:idu'
	);
		$q->bindValue(':idu'  , $_COOKIE['profile_uid']);

	$q->execute();
	return $q->fetchAll(2);
}
function getatoy() {	
	$q = DB::pdo()->prepare(
 		' SELECT p.* from  toys as p where seller_id=:idu'
	);
		$q->bindValue(':idu'  , $_COOKIE['profile_uid']);

	$q->execute();
	return $q->fetchAll(2);
}
?>