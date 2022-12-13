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
                    <a href="index.php">Over ons</a>
                </li>
                <li>
                    <a href="order.php">Bestellen</a>
                </li>
                <li>
                    <a href="blog.php">Blog</a>
                </li>
                <li>
                    <a href="contact.php">Contact</a>
                </li>
                <li>
                    <a href="cart.php">Winkelmandje</a>
                </li>
                <?php if(!empty($_SESSION['logged_in'])){ ?>
                    <li>
                        <a href="account.php">account</a>
                    </li>
                    <li>
                        <a href="logout.php">logout</a>
                    </li>
                <?php }
                else{ ?>
                    <li>
                        <a href="login.php">Login</a>
                    </li>
                <?php }?>

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