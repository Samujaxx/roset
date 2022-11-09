<?php
session_start();
require "includes/database.php";

$email = $_POST["email"];
$wachtwoord = $_POST["password"];

$result = $conn->query("SELECT * FROM users WHERE email = '$email' LIMIT 1");

$gebruiker = $result->fetch_assoc();


if (is_array($gebruiker)) {
    if ($gebruiker["email"] == $email && $gebruiker["password"] == $wachtwoord) {
        if ($gebruiker["role"] == "admin") {
            $_SESSION['logged_in'] = true;
            $_SESSION['just_logged_in'] = true;
            $_SESSION['id'] = $gebruiker['id'];
            $_SESSION['role'] = "medewerker";
            header("Location: index.php");
            exit;
        }
        $_SESSION['logged_in'] = true;
        $_SESSION['just_logged_in'] = true;
        $_SESSION['id'] = $gebruiker['id'];
        $_SESSION['role'] = "klant";
        header("Location: index.php");
        exit;
    }
}
