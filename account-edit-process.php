<?php

if (isset($_POST["submit"])) {
    $id = $_POST["id"];
    
    if (
        //als alles ingevuld is ga dan verder
        !empty($_POST["firstname"])
        && !empty($_POST["lastname"])
        && !empty($_POST["email"])
        && !empty($_POST["date_of_birth"])
        && !empty($_POST["phonenumber"])
        && !empty($_POST["address"])
        && !empty($_POST["zipcode"])
        && !empty($_POST["city"])
        
        ) {
            //waarde geven aan variables
        $firstname = $_POST["firstname"];
        $lastname = $_POST["lastname"];
        $email = trim($_POST["email"]);
        $phonenumber = $_POST["phonenumber"];
        $date_of_birth = $_POST["date_of_birth"];
        $address = $_POST["address"];
        $zipcode = $_POST["zipcode"];
        $city = $_POST["city"];

        require 'includes/database.php';
        
        $sql = "UPDATE users SET 
        firstname = '$firstname', 
        lastname = '$lastname', 
        email = '$email', 
        phone = '$phonenumber',
        adress = '$address',
        zipcode = '$zipcode',
        city = '$city',
        date_of_birth =  '$date_of_birth' WHERE id = '$id'";
        
        if (mysqli_query($conn, $sql)) {
            header("location: account.php");
        }

        mysqli_close($conn); 

    }
}
?>