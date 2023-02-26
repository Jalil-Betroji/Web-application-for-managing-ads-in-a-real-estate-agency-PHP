<?php
require 'connect.php';
session_start();
if(isset($_SESSION['email'])){
 $clientEmail = $_SESSION['email'];
 $getClientID = "SELECT client_ID FROM `client` WHERE Email = '$clientEmail'";
 $clientIDArr = $conn->query($getClientID)->fetch();
 $client_ID = $clientIDArr['client_ID'];
 
     $annonce_Title = $_POST['Title'];
     $announce_Area = $_POST['Area'];
     $announce_Rooms = $_POST['Rooms'];
     $announce_Bathrooms = $_POST['Bathrooms'];
     $announce_Price = $_POST['Price'];
     $announce_Country = $_POST['Country'];
     $announce_City = $_POST['City'];
     $postal_Code = $_POST['code_postal'];
     $announce_HouseNumber = $_POST['house_number'];
     $announce_HouseFloor = $_POST['house_floor'];
     $announce_Type = $_POST['Type'];
     $announce_Category = $_POST['Category'];
 
     $sql = "INSERT INTO `announces` 
     (`Client_ID`, `Title`, `Area`, `Rooms`, `Bathrooms`,`Price`, `Country`, `City`, `Code_Postal`,
      `House_Number`, `House_Floor`,`Type`, `Category`,`Publication_date`) 
     VALUES 
     ('$client_ID', '$annonce_Title', '$announce_Area', '$announce_Rooms', '$announce_Bathrooms',
      '$announce_Price','$announce_Country','$announce_City','$postal_Code','$announce_HouseNumber',
      '$announce_HouseFloor','$announce_Type','$announce_Category',NOW())";
     // execute a query
     $statement = $conn->query($sql);
 
    //  $LAST_INSERT_ID = $conn->query("SELECT LAST_INSERT_ID()")->fetch();
 
    //  echo $LAST_INSERT_ID ;

    //  //Use something similar before processing files.
    //  $files = array_filter($_FILES['image']['name']); 
    // //  Count the number of imageed files in array
    //  $total_count = count($_FILES['image']['name']);
    // //  Loop through every file
    //  for( $i=0 ; $i < $total_count ; $i++ ) {
    //      //The temp file path is obtained
    //      $tmpFilePath = $_FILES['image']['tmp_name'][$i];
    //      //A file path needs to be present
    //      if ($tmpFilePath != ""){
    //          //Setup our new file path
    //          $newFilePath = "./imagesFiles/" . $_FILES['image']['name'][$i];
    //          //File is uploaded to temp dir
    //          if(move_uploaded_file($tmpFilePath, $newFilePath)) {
    //              //Other code goes here
    //              $insertImg = "INSERT INTO `image` 
    //              (`imagePath`, `imageType`, `annonceID`) 
    //              VALUES 
    //              ('$newFilePath', 1 ,'$LAST_INSERT_ID[0]');";
    //              // execute a query
    //              $statement = $conn->query($insertImg);
    //          }
    //      }
    //  }

}
?>