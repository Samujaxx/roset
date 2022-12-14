<?php
require 'database.php';
require 'session.php';

if(empty($_SESSION['userData']) || ($_SESSION['userData']['role'] == "klant")){

header("Location: ../index.php");
}
?>