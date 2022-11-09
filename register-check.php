<?php
session_start();
require "includes/database.php";

if (isset($_POST['submit'])) {
    if (
        !empty($_POST['name'])
        && !empty($_POST['lastname'])
        && !empty($_POST['phone'])
        && !empty($_POST['email'])
        && !empty($_POST['password'])
    ) {
        
        $name = $_POST["name"];
        $lastname = $_POST["lastname"];
        $phone = $_POST["phone"];
        $birthday = $_POST["birthday"];
        $email = $_POST["email"];
        $password = $_POST["password"];

        $sql = "INSERT INTO users (firstname, lastname, email, password, date_of_birth, phone, role) 
            VALUES ('$name', '$lastname', '$email', '$password', '$birthday', '$phone', 'user')";

        mysqli_query($conn, $sql);
        echo "Inserted successfully";
        mysqli_close($conn); // Sluit de database verbinding
        header("location: index.php");
    } 
    else {
        echo '<script type="text/javascript">';
        echo ' alert("Fill in all boxes please")';  //now showing an alert box.
        echo '</script>';
    }
}
