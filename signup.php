
<?php

require 'database.class.php';
require 'db_connection.php';
DB::init(
		'localhost:3306',
		'vkids',
		'root',
		''
	);
   

if(isset($_POST['username']) && isset($_POST['nom'])&& isset($_POST['prenom'])&& isset($_POST['phone'])&& isset($_POST['password'])){
    $login=$_POST['username'];
    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
    $phone=$_POST['phone'];
    $pwd=$_POST['password'];

 
	$q = DB::pdo()->prepare(
 		'INSERT INTO user(username, nom , prenom , phone ,password)
 		 VALUES(:us , :nom , :prenom , :phone , :pw)'
	);

	$q->bindValue(':us', $login);
	$q->bindValue(':nom'  , $nom);
	$q->bindValue(':prenom', $prenom);
	$q->bindValue(':phone'  , $phone);
	$q->bindValue(':pw', $pwd);


	$q->execute();

	return $q->rowCount();
}
?>