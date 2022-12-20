<?php
include("includes/session.php");
require('includes/database.php');
unset($_SESSION['winkelwagen']);
header("Location: order.php");
?>