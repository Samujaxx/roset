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
            <div class="row-1">
            <?php foreach ($products as $product) : ?>
                        <a href="add-flavor.php?id=<?php echo $product['id'] ?>">
                            <button id="foto-bestel" class="order-button" type="submit" name="flavor" value="flavour">
                                <p><?php echo $product['name'] ?></p>
                                <img src="includes/images/flavors/<?php echo $product['image'] ?>.webp" class="img-ice">
                            </button>
                        </a>

                    <?php endforeach; ?>
            </div>
            <div class="row-2">
                <button id="foto-bestel" class="order-button" type="submit" name="banaan">
                    <p>Banaan</p>
                    <img id="bestel-image" src="includes/images/banaan.webp" class="img-ice">
                </button>
                <button id="foto-bestel" class="order-button" type="submit" name="nutella">
                    <p>Nutella</p>
                    <img id="bestel-image" src="includes/images/nutella.webp" class="img-ice">
                </button>
                <button id="foto-bestel" class="order-button" type="submit" name="chocolade">
                    <p>Chocolade</p>
                    <img id="bestel-image" src="includes/images/chocolade.webp" class="img-ice">
                </button>
                <button id="foto-bestel" class="order-button" type="submit" name="citroen">
                    <p>Citroen</p>
                    <img id="bestel-image" src="includes/images/citroen.webp" class="img-ice">
                </button>
                <button id="foto-bestel" class="order-button" type="submit" name="kers">
                    <p>Kers</p>
                    <img id="bestel-image" src="includes/images/kers.webp" class="img-ice">
                </button>
                <button id="foto-bestel" class="order-button" type="submit" name="griekseYoghurt">
                    <p>Yoghurt</p>
                    <img id="bestel-image" src="includes/images/yoghurt.webp" class="img-ice">
                </button>
            </div>
            <div class="row-3">

                <button id="foto-bestel" class="order-button" type="submit" name="oreo">
                    <p>Oreo</p>
                    <img id="bestel-image" src="includes/images/oreo.webp" class="img-ice">
                </button>
                <button id="foto-bestel" class="order-button" type="submit" name="mango">
                    <p>Mango</p>
                    <img id="bestel-image" src="includes/images/mango.webp" class="img-ice">
                </button>
                <button id="foto-bestel" class="order-button" type="submit" name="marsepein">
                    <p>Marsepein</p>
                    <img id="bestel-image" src="includes/images/marsepein.webp" class="img-ice">
                </button>
                <button id="foto-bestel" class="order-button" type="submit" name="snicker">
                    <p>Snicker</p>
                    <img id="bestel-image" src="includes/images/snicker.webp" class="img-ice">
                </button>
                <button id="foto-bestel" class="order-button" type="submit" name="marsepein">
                    <p>marshmello</p>
                    <img id="bestel-image" src="includes/images/marshmellow.webp" class="img-ice">
                </button>
                <button id="foto-bestel" class="order-button" type="submit" name="cookiedough">
                    <p>Cookie Dough</p>
                    <img id="bestel-image" src="includes/images/cookiedough.webp" class="img-ice">
                </button>
            </div>
        </div>

    </div>
</body>

</html>