<?php
$DB_HOST = "localhost";
$DB_USERNAME = "root";
$DB_PASWWORD = "";
$DB_NAME = "estate_agency";

try{
  $conn = new PDO("mysql:host=$DB_HOST;dbname=$DB_NAME", $DB_USERNAME, $DB_PASWWORD);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOExeption $e){
  echo"connection failed" .$e->getMessage();
}

?>