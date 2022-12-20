<?php

include("includes/session.php");
require('includes/database.php');
require('includes/user-access.php');

$id = $_GET["id"];


$sql = "SELECT * FROM orders WHERE id = $id LIMIT 1";

if ($result = mysqli_query($conn, $sql)) {

    $order = mysqli_fetch_assoc($result);

    if (is_null($order)) {
        header("location: order-dashboard.php");
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta description="product edit">
    <link rel="stylesheet" href="dashboard.css">
    <link rel="stylesheet" href="includes/css/dashboard.css">
    <link rel="stylesheet" href="includes/css/main.css">
    <title>Home</title>
</head>
    <body>
    <?php
    include("user-navbar.php");
    include("mainmenu.php");
    ?>
                <div class="flex-containers-right">
                    <div class="title">
                        <h1>bestelling aanpassen</h1>
                    </div>
                    <div class="info">
                        <form action="order-edit-process.php" method="post">
                        <input type="hidden" name="id" value="<?php echo $order["id"] ?>">
                            <h2>
                                <label for="name">naam</label>
                                <input type="text" class="form-control" name="name" value="<?php echo $order["customer_name"] ?>"><br>
                                <label for="name">adres</label>
                                <input type="text" class="form-control" name="adress" value="<?php echo $order["adress"] ?>"><br>
                                <label for="name">stad</label>
                                <input type="text" class="form-control" name="city" value="<?php echo $order["city"] ?>"><br>
                                <label for="name">ophalen</label>
                                <input type="text" class="form-control" name="pickup" value="<?php echo ($order["pickup"] == 0) ? "NO" : "YES"   ?>"><br>
                                <label for="name">bezorgen</label>
                                <input type="text" class="form-control" name="delivery" value="<?php echo ($order["delivery"] == 0) ? "NO" : "YES"   ?>"><br>
                                <label for="name">bezorgd</label>
                                <input type="text" class="form-control" name="delivered" value="<?php echo ($order["isReceived"] == 0) ? "NO" : "YES"   ?>"><br>
                            </h2>
                            <br>
                            <button type="submit" class="button" name="submit">Bewerk bestelling</button>
                        </form>
                        </div>
                    </div>       
                </div>         
    </body>
</html>