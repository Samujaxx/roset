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
        !empty($_POST["id"])
        && !empty($_POST["name"])
        && !empty($_POST["price_kg"])
        && !empty($_POST["fotw"])
        && !empty($_POST["category"])
        
        ) {
  
            //waarde geven aan variables
        $id = $_POST["id"];    
        $name = $_POST["name"];
        $price_per_kg = $_POST["price_kg"];
        $is_flavor_ot_week = ($_POST["fotw"]== "NO") ? 0: 1;
        $category = $_POST["category"];

        require 'includes/database.php';
        
        $sql = "UPDATE products SET 
        id = '$id',
        name = '$name', 
        price_kg = '$price_per_kg', 
        fotw = '$is_flavor_ot_week',
        category =  '$category' 
        WHERE id = '$id'";
        
        if (mysqli_query($conn, $sql)) {
            header("location: product-dashboard.php");
        }

        mysqli_close($conn); 
    }
}