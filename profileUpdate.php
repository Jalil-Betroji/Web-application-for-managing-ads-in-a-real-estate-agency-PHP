<?php
require 'connect.php';
session_start();
if(isset($_SESSION['email'])){
    $clientEmail = $_SESSION['email'];
    $sql = "SELECT Client_ID, Last_Name, Country, Email, Phone, Account_Type, City, Code_Postal, CIN  
            FROM client 
            WHERE Email = '$clientEmail';";
    $statement = $conn->query($sql)->fetch();
    $clientID = $statement['Client_ID'];

    $firstName = $_POST['first_Name'];
    $lastName = $_POST['last_Name'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $country = $_POST['country'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $code_Postal = $_POST['code_Postal'];
    $account_Type = $_POST['account_Type'];

    $query= $conn->prepare("UPDATE client 
                            SET First_Name = :firstName, Last_Name = :lastName, Email = :email, 
                                Phone = :phone, Country = :country, City = :city, 
                                Code_Postal = :code_Postal, Account_Type = :account_Type, Address = :address
                            WHERE Client_ID = :clientID");

    $query->bindValue(':clientID', $clientID, PDO::PARAM_INT);
    $query->bindValue(':firstName', $firstName, PDO::PARAM_STR);
    $query->bindValue(':lastName', $lastName, PDO::PARAM_STR);
    $query->bindValue(':email', $email, PDO::PARAM_STR);
    $query->bindValue(':phone', $phone, PDO::PARAM_STR);
    $query->bindValue(':country', $country, PDO::PARAM_STR);
    $query->bindValue(':code_Postal', $code_Postal, PDO::PARAM_STR);
    $query->bindValue(':account_Type', $account_Type, PDO::PARAM_STR);
    $query->bindValue(':address', $address, PDO::PARAM_STR);
    $query->bindValue(':city', $city, PDO::PARAM_STR);

    // Execute the UPDATE statement
    $query->execute();
}
?>
