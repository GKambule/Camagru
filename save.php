<?php

// print_r($_POST);
// if ($_POST['img'])
// {
// 	$img= $_POST['img'];
// 	$link= substr($img, (strpos($img, ",") + 1));
// 	file_put_contents("images/13", $img);
// }
 require_once ($_SERVER['DOCUMENT_ROOT'] . '/Camagru/Configurations/DataBase.php');
//
// try {
//   $conn = new PDO($DB_DSN, $DB_USER, $DB_PASSWORD);
// //   var_dump($conn);
// } catch (PDOException $e) {
//   echo $e->getMessage();
// }
// $use = "use camagru";
//   $conn->query($use);
// require_once('/goinfre/gkambuyl/mamp/apache2/htdocs/Camagru/Configurations/DataBase.php');
if ($_POST['img']) {
	$img = $_POST['img'];
	$url = 'images/';
	$img = str_replace('data:image/png;base64,', '', $img);
	$img = str_replace(' ', '+', $img);
    $data = base64_decode($img);
	$file = uniqid() . '.png';
	$image_name = $file;
    $file = $url . $file;
	// insert($image_name, $conn);
	$insert = 'INSERT INTO `images`(`image_name`) VALUES (?)';
	// echo $insert;
  	try {
		  $st = $conn->prepare($insert);
		  $st->execute([$image_name]);;
	  } catch (PDOException $e) {
		  echo $e->getMessage();
	  }
    $success = file_put_contents($file, $data);
}