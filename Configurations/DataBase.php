<?php

require ($_SERVER['DOCUMENT_ROOT'] . '/Camagru/config/database.php');
try {
  $conn = new PDO($DB_DSN, $DB_USER, $DB_PASSWORD);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  var_dump($conn);
} catch (PDOException $e) {
  echo $e->getMessage();
}

    $sql = "CREATE DATABASE IF NOT EXISTS Camagru";
    $conn->exec($sql);
    echo "Database created successful<br>";

  $use = "use camagru";
  $conn->query($use);

    $sql = "CREATE TABLE IF NOT EXISTS camagru.user_info(
            id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            firstname VARCHAR(30) NOT NULL,
            lastname VARCHAR(30) NOT NULL,
            password VARCHAR(255) UNIQUE NOT NULL,
            email VARCHAR(50) UNIQUE,
            reg_date TIMESTAMP)";
    $conn->exec($sql);
    echo "Table created successful<br>";


  $images_tables = 'CREATE TABLE IF NOT EXISTS `camagru`.`images` ( `image_id` INT NOT NULL AUTO_INCREMENT , `image_name` VARCHAR(255) NOT NULL , PRIMARY KEY (`image_id`)) ENGINE = InnoDB;';
  $conn->exec($images_tables);
   echo "images table created successful<br>";

if (isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['Email']) && isset($_POST['password']) && isset($_POST['c_password']))
{
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $password = hash('whirlpool', $_POST['password']);
  $email = $_POST['Email'];
  try
    {
      $conn = new PDO($DB_DSN."; dbname=Camagru", $DB_USER, $DB_PASSWORD);
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $sql = $conn->prepare("INSERT INTO user_info(firstname, lastname, password, email) 
            VALUES (:firstname, :lastname, :password, :email)");
      $sql->bindParam(':firstname',$firstname);
      $sql->bindParam(':lastname', $lastname);
      $sql->bindParam(':password', $password);
      $sql->bindParam(':email', $email);
     
      $sql->execute();
      
      $msg =  "added success<br>";
      header('location:../actual.php');
    }
    catch(PDOException $e)
    {
      $msg = "<br>" . $e->getMessage();
      
      header('location:../Sign_up.php?msg=userexists');
    }

}

if (!file_exists('../images'))
{
  mkdir('../images');
}


function insert($image_name, $conn) {
  $insert = 'INSERT INTO `images`(`image_name`) VALUES (`' . $image_name . '`)';
  $conn->exec($insert);
} 
?>