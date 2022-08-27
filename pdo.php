<?php 
  
  try{
    $conn = new PDO("mysql:host=localhost;dbname=deneme1","root","");
  } catch (PDOException $e){
    die ("Could not connect to the database $dbname:" . $e->getMessage());
  }

if (isset($_POST['signin'])){

    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $conn->exec("INSERT INTO deneme1 (email_address, password) VALUES ( '$email', '$password')");
  echo "kaydedildi" ;
}
 