
<?php
require 'database.class.php';
require 'db_connection.php';
DB::init(
		'localhost:3306',
		'vkids',
		'root',
		''
	);
   
if(isset($_POST['username']) && isset($_POST['password'])){
    $login=$_POST['username'];
    $pwd=$_POST['password'];

 
	$q = DB::pdo()->prepare(
 		' SELECT p.* from  user as p where username=:us and password=:pw'
	);

	$q->bindValue(':us', $login);
	$q->bindValue(':pw'  , $pwd);

	$q->execute();
$userinfo=$q->fetch(2);
	$iduser=$userinfo['id'];
	$name=$userinfo['nom'];
	$prenom=$userinfo['prenom'];
	$phone=$userinfo['phone'];
	$image=$userinfo['image'];
	session_start();
	$_SESSION['iduser']=$iduser;
	$_SESSION['nom']=$name;
	$_SESSION['prenom']=$prenom;
	$_SESSION['phone']=$phone;
	$_SESSION['image']=$image;


if ($userinfo){
	//die(var_dump($_SESSION['iduser']));
	
	
	header("Location: " . "http://" . $_SERVER['HTTP_HOST'] . "/vkidspace.github.io/index.html" );


}
else
 header("Location: " . "http://" . $_SERVER['HTTP_HOST'] . "/vkidspace.github.io/loginerror.html" ); 
	# code...
}
?>