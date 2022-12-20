<?php
include("includes/session.php");
require('includes/database.php');
require('includes/user-access.php');

if (empty($_SESSION['userData'])) {

    header("Location: login.php");
}

if (isset($_POST["submit"])) {
    $id = $_POST["id"];

    if (
        //als alles ingevuld is ga dan verder
        !empty($_POST["name"])
        && !empty($_POST["adress"])
        && !empty($_POST["city"])
        && !empty($_POST["pickup"])
        && !empty($_POST["delivery"])
        && !empty($_POST["delivered"])
        
        ) {
  
        //waarde geven aan variables    
        $name = $_POST["name"];
        $adress = $_POST["adress"];
        $city = $_POST["city"];
        $pickup = ($_POST["pickup"]== "NO") ? 0: 1;
        $delivery = ($_POST["delivery"]== "NO") ? 0: 1;
        $delivered = ($_POST["delivered"]== "NO") ? 0: 1;


        require 'includes/database.php';
        
        $sql = "UPDATE orders SET 
        adress = '$adress', 
        pickup = '$pickup', 
        delivery = '$delivery',
        isReceived =  '$delivered' ,
        customer_name =  '$name' ,
        city =  '$city' 
        WHERE id = '$id'";
        
        if (mysqli_query($conn, $sql)) {
            header("location: order-dashboard.php");
        }

        mysqli_close($conn); 
    }
}