<?php
include("includes/session.php");
require('includes/database.php');

if (empty($_SESSION['winkelwagen'])) {
    header("Location: login.php");
}


//veranderd elk item in de array naar een string

$whereIn = implode(',', $_SESSION['winkelwagen']);
$sql = "SELECT * FROM products WHERE id in ($whereIn)";

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
    <link rel="stylesheet" href="includes/css/cart.css">
    <title>Winkelmandje</title>
</head>

<body>
    <?php
    include("navbar.php");
    include("mainmenu.php");
    ?>

    <div class="flex-containers-right">
            <form class="cart" action="cart-process.php" method="post" name="submit">
                <div class="head">
                    <h1>winkelmandje</h1>
                </div>
                <div class="options-title">
                    <h2>bestel informatie</h2>
                </div>
                <div class="item-title">
                <h2>Jouw bestelling</h2>
                </div>
                <div class="items">
                <?php foreach ($products as $product) : ?>
                    <p style="text-align: left;"><?php echo $product['name'] ?> </p>
                <?php endforeach; ?>
                </div>
                <div class="options">
                <input type="hidden" id="winkelmandids" name="product_id" value="<?php echo $whereIn ?> ">
                <input type="hidden" id="userids" name="userid" value="<?php echo $_SESSION['id'] ?> ">
                <label style="font-weight: 600;" for="fname">Volledige Naam</label>
                <input type="text" id="fullname" name="fullname"><br>
                <label style="font-weight: 600;" for="zipcode">Plaats</label>
                <select name="city" id="city">
                    <option value="Castricum">Castricum</option>
                    <option value="Bakkum">Bakkum</option>
                    <option value="Akersloot">Akersloot</option>
                </select><br>
                <label style="font-weight: 600;" for="adress">Adres</label>
                <input type="text" id="adress" name="adress"><br>
                <label style="font-weight: 600;">bezorgoptie</label>
                <select name="method" id="method">
                        <option value="delivery">Laten bezorgen (Tegen extra kosten)</option>
                        <option value="pickup">Zelf Afhalen (Gratis)</option>
                    </select><br>
                </div>
                <div class="button">
                <input type="submit" name="submit" value="Plaats bestelling" style="background-color: rgb(6, 153, 221); color:black;">
                </div>
            </form>
</body>

</html>