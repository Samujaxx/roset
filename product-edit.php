<?php

include("includes/session.php");
require('includes/database.php');
require('includes/user-access.php');

$id = $_GET["id"];


$sql = "SELECT * FROM products WHERE id = $id LIMIT 1";

if ($result = mysqli_query($conn, $sql)) {

    $product = mysqli_fetch_assoc($result);

    if (is_null($product)) {
        header("location: product-overview.php");
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                        <h1>Product aanpassen</h1>
                    </div>
                    <div class="info">
                        <form action="product-edit-process.php" method="post">
                        <input type="hidden" name="id" value="<?php echo $product["id"] ?>">
                            <h2>
                                <label for="name">Naam van het product</label>
                                <input type="text" class="form-control" name="name" value="<?php echo $product["name"] ?>"><br>
                                <label for="name">Prijs per kilo</label>
                                <input type="text" class="form-control" name="price_kg" value="<?php echo $product["price_kg"] ?>"><br>
                                <label for="name">Smaak van de week</label>
                                <input type="text" class="form-control" name="fotw" value="<?php echo ($product["fotw"] == 0) ? "NO" : "YES"   ?>"><br>
                                <label for="name">Categorie</label>
                                <input type="text" class="form-control" name="category" value="<?php echo $product["category"] ?>">
                            </h2>
                            <br>
                            <button type="submit" class="button" name="submit">Bewerk Product</button>
                        </form>
                        </div>
                    </div>       
                </div>         
    </body>
</html>