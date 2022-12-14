<?php

print_r($_POST);

if ($_POST['name'] != '' && $_POST['price_kg'] != ''&& $_POST['category'] != '') {

    $name = $_POST['name'];
    $price_per_kg = $_POST['price_kg'];
    $category = $_POST['category'];

    require "../database.php";

    $sql = "INSERT INTO products (name, price_kg, category)
    VALUES ('$name', '$price_per_kg','$category')";

    if (mysqli_query($conn, $sql) === TRUE) {
        header("Location: ../../product-dashboard.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    mysqli_close($conn);
}
?>