<?php
include("includes/session.php");
require("includes/database.php");

$sql = "SELECT * FROM products ";

if ($result = mysqli_query($conn, $sql)) {
    $products = mysqli_fetch_all($result, MYSQLI_ASSOC);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta description="products page">
    <link rel="stylesheet" href="includes/css/main.css">
    <link rel="stylesheet" href="includes/css/order.css">
    <title>Bestellen!</title>
</head>

<body>
    <?php
    include("navbar.php");
    include("mainmenu.php");
    ?>

    <div class="flex-containers-right">
        <h1 class="head"> Bestel hier ijs naar eigen keus </h1>
        <div class="products">
            <?php foreach ($products as $product) : ?>
                        <a href="add-flavor.php?id=<?php echo $product['id'] ?>">
                            <button id="foto-bestel" class="order-button" type="submit" name="flavor" value="flavour">
                                <p><?php echo $product['name'] ?></p>
                                <img src="includes/images/flavors/<?php echo $product['image'] ?>.webp" class="img-ice">
                            </button>
                        </a>
                    <?php endforeach; ?>
        </div>

    </div>
</body>

</html>