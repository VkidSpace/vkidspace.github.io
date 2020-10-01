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
mkdir("uploads/".$_SESSION['iduser'],0777,true);
$target_dir = "uploads/".$_SESSION['iduser']."/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}


// Check if file already exists
if(file_exists($target_file))
{
    chmod($target_file,0755); //change perms if possible
    unlink($target_file); //remove the file
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 10000000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats




// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
  	
    $filee="uploads/".$_SESSION['iduser']."/".basename( $_FILES["fileToUpload"]["name"]);
    $_SESSION['image']=$filee;
    $q  = DB::pdo()->prepare('UPDATE user SET image=:fi WHERE id=:idu ');
$q->bindValue(':idu', $_SESSION['iduser'] , PDO::PARAM_INT);
$q->bindValue(':fi',  $filee );
$q->execute();
    header("Location: " . "http://" . $_SERVER['HTTP_HOST'] . "/vkidspace.github.io/page-profile.php" );
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}


?>