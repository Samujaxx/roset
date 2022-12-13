<?php
include("includes/session.php");
require('includes/database.php');



if (empty($_SESSION['userData'])) {

    header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="includes/css/main.css">
    <link rel="stylesheet" href="includes/css/cart.css">
    <title>Winkelmandje</title>
</head>

<body>
    <?php
    include("navbar.php");
    include("mainmenu.php");
    ?>

    <div class="flex-containers-right">
        <?php
        if (empty($_SESSION['winkelwagen'])) { ?>
            <h1 class="head-title"> welkom bij je Winkelmandje </h1>
            <div class="cart"> zie je hier niets ga snel naar de bestellen pagina en bestel iets</div>
        <?php } else { ?>
            <div class="cart"><?php
                                print_r($_SESSION['winkelwagen']);

                                //veranderd elk item in de array naar een string
                                $whereIn = implode(',', $_SESSION['winkelwagen']);
                                // die($whereIn);
                                $sql =
                                    "SELECT * FROM products WHERE name in ($whereIn)";

                                if ($result = mysqli_query($conn, $sql)) {
                                    $products = mysqli_fetch_all($result, MYSQLI_ASSOC);
                                } ?></div>
        <?php } ?>

    </div>
</body>

</html>