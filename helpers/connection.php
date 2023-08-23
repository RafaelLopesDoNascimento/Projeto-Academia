<?php 
// variaveis dos dados do DB 
$host = "localhost";
$DBname = "academia";
$username = "root";
$password = "";

// try catch para tentar acessar o DB
try {
  
  $conn = new PDO("mysql:host=$host;dbname=$DBname", "$username", "$password");
  
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
  
  } catch (PDOException $e) {
  $error = $e->getMessage();
  echo "<h1>Error: </h1>" . $error;
  }
?>