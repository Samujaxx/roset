<?php

session_start();

if (isset($_POST["submit"])) {

    $user = $_SESSION['id'];
    $products = $_POST['product_id'];
    $adress = $_POST['adress'];
    $naam = $_POST['fullname'];
    $city = $_POST['city'];


    if($_POST['method'] = 'pickup')
    {
        $pickup = 'true';
        $delivery = 'false';
    }
    if($_POST['method'] = 'delivery')
    {
        $pickup = 'false';
        $delivery = 'true';
    }

    require "includes/database.php";
    $product = explode(",", $products);

    foreach ($product as $prods) :

        $sql = "INSERT INTO orders (user_id, product_id, adress, pickup, delivery, name, city)
        VALUES ('$user','$prods', '$adress', '$pickup', '$delivery', '$naam', '$city')";
        mysqli_query($conn, $sql);

    endforeach;

    unset($_SESSION['winkelwagen']); 
    mysqli_close($conn); 

    header("Location: order.php");
}
