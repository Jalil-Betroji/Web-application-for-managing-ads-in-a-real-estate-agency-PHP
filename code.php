<?php
require 'connect.php';
session_start();



if(isset($_POST['add_announce_btn'])){
    if(isset($_FILES['image'])){

        $file_name = $_FILES['image']['name'];
        $file_size =$_FILES['image']['size'];
        $file_tmp =$_FILES['image']['tmp_name'];
        $file_type=$_FILES['image']['type'];   
        $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));

       $Title = mysqli_real_escape_string($conn,$_POST['Title']);
       $Rooms = mysqli_real_escape_string($conn,$_POST['Rooms']);
       $Amount = mysqli_real_escape_string($conn,$_POST['Amount']);
       $City = mysqli_real_escape_string($conn,$_POST['City']);
       $house_number = mysqli_real_escape_string($conn,$_POST['house_number']);
       $Category = mysqli_real_escape_string($conn,$_POST['Category']);
       $Area = mysqli_real_escape_string($conn,$_POST['Area']);
       $Bathrooms = mysqli_real_escape_string($conn,$_POST['Bathrooms']);
       $Country = mysqli_real_escape_string($conn,$_POST['Country']);
       $code_postal = mysqli_real_escape_string($conn,$_POST['code_postal']);
       $Type = mysqli_real_escape_string($conn,$_POST['Type']);

       

    }
}

if(isset($_POST['add_client'])){

       $fname = $_POST['fname'];
       $lname = $_POST['lname'];
       $email = $_POST['email'];
       $phone = $_POST['phone'];
       $cin = $_POST['cin'];
       $country = $_POST['country'];
       $city = $_POST['city'];
       $address = $_POST['address'];
       $password = password_hash($_POST['password'],PASSWORD_DEFAULT);
       $code_postal = $_POST['postal'];
       $Type = $_POST['type'];

       $sql = "INSERT INTO `client` (	
        `First_Name`,
        `Last_Name`,	
        `Email`,	
        `Phone`,	
        `CIN`,
        `Country`,	
        `City`,	
        `Address`,	
        `Password`,	
        `Code_Postal`,	
        `Account_Type`) VALUES ('$fname',
        '$lname',	
        '$email',	
        '$phone',
        '$cin',
        '$country',	
        '$city',	
        '$address',	
        '$password',	
        '$code_postal',	
        '$Type')";
        $statement = $conn->query($sql);
        // $query_excute = $query_run->execute();
}

if(isset($_POST['login_into_account'])){
    $email = $_POST['login_email'];
    $password = $_POST['login_password'];
    //retrieve info from database
    $statment = $conn->query("SELECT Password FROM `client` WHERE Email = '$email'");
    $user = $statment->fetch();
    echo $user['Password'];
    // print_r($user);
    //compare email and password 
    if(password_verify($password,$user['Password'])){
       $_SESSION['email'] = $email ;
       print_r($_SESSION);
        // Succefully logged in

    }else{
        echo "error a jalil";
    }
}
if(isset($_SESSION['email'])){
    header('Location:profile.php');
    echo print_r($userIDArr);
}

if(isset($_GET['announce_id'])){
    $announce_id = mysqli_real_escape_string($conn, $_GET['announce_id']);

    $select_Announce_Info = "SELECT * FROM announces INNER JOIN images ON announces.Announce_ID = images.Image_ID
    WHERE Announce_ID = '$announce_id'";
     $Announces_INFO = $conn->prepare($select_Announce_Info);
     $Announces_INFO->execute();
     $Announces_Info_List = $Announces_INFO->fetchAll();
      print_r($Announces_Info_List);
}
?>
<?php





// require "connect.php";
// session_start();

// if( $_SERVER['REQUEST_METHOD'] == 'POST' ){

// $clientEmail = $_SESSION['email'];
// $selectClientID = "SELECT clientID FROM `client` WHERE email = '$clientEmail'";
// $clientIDArr = $conn->query($selectClientID)->fetch();
// $clientID = $clientIDArr['clientID'];

//     if(isset($_POST['submit'])) {

//     $annonceTitle = $_POST['title'];
//     $price = $_POST['price'];
//     $type = $_POST['type'];
//     $category = $_POST['category'];
//     $postalCode = $_POST['postalCode'];
//     $city = $_POST['city'];

//     $sql = "INSERT INTO `annonce` 
//     (`title`, `price`, `type`, `category`, `postalCode`,`city`, `clientID`) 
//     VALUES 
//     ('$annonceTitle', '$price', '$type', '$category', '$postalCode', '$city','$clientID')";
//     // execute a query
//     $statement = $conn->query($sql);

//     $LAST_INSERT_ID = $conn->query("SELECT LAST_INSERT_ID()")->fetch();


//     //Use something similar before processing files.
//     $files = array_filter($_FILES['image']['name']); 
//     // Count the number of imageed files in array
//     $total_count = count($_FILES['image']['name']);
//     // Loop through every file
//     for( $i=0 ; $i < $total_count ; $i++ ) {
//         //The temp file path is obtained
//         $tmpFilePath = $_FILES['image']['tmp_name'][$i];
//         //A file path needs to be present
//         if ($tmpFilePath != ""){
//             //Setup our new file path
//             $newFilePath = "./imagesFiles/" . $_FILES['image']['name'][$i];
//             //File is uploaded to temp dir
//             if(move_uploaded_file($tmpFilePath, $newFilePath)) {
//                 //Other code goes here
//                 $insertImg = "INSERT INTO `image` 
//                 (`imagePath`, `imageType`, `annonceID`) 
//                 VALUES 
//                 ('$newFilePath', 1 ,'$LAST_INSERT_ID[0]');";
//                 // execute a query
//                 $statement = $conn->query($insertImg);
//             }
//         }
//     }
// }
// }



?>