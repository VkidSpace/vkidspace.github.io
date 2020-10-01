<?php
require 'database.class.php';
require 'db_connection.php';
DB::init(
		'localhost:3306',
		'vkids',
		'root',
		''
	);

$iduser=$_SESSION['iduser'];


 if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['someAction'])){
    $url = $_SERVER["REQUEST_URI"];
$fragment = parse_url($url,PHP_URL_FRAGMENT);
//$pet=substr($peturl, 44);
die(var_dump($_GET["fragment"]));
   $pet=$v['pet_id'];
    $q  = DB::pdo()->prepare('UPDATE pets SET borrower_id=:idu WHERE pet_id=:bo ');
 $q->bindValue(':idu', $_SESSION['iduser']);
$q->bindValue(':bo', $pet );

$q->execute();
  
}


?>