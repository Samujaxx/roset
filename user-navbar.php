<?php 
    include("includes/session.php"); 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="includes/css/navbar.css">
</head>

<body>
    <div class="navbar">
        <nav>
            <ul class="nav-links">
                <li>
                    <a href="user-dashboard.php">gebruikers</a>
                </li>
                <li>
                    <a href="product-dashboard.php">producten</a>
                </li>
                <li>
                    <a href="order-dashboard.php">orders</a>
                </li>
                <li>
                    <a href="index.php">home</a>
                </li>
            </ul>
            <div class="burger">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
            </div>
        </nav>
    </div>
</body>

</html>