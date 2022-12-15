<?php
include("includes/session.php");
require('includes/database.php');

$whereIn = implode(',', $_SESSION['winkelwagen']);
// die($whereIn);
$sql =
    "SELECT * FROM products WHERE id in ($whereIn)";

if ($result = mysqli_query($conn, $sql)) {
    $products = mysqli_fetch_all($result, MYSQLI_ASSOC);
}

if(empty($_SESSION['userData'])){

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
    <p id="items"></p>
             <a href="leeg-winkelwagen.php">Delete</a>
            <p style="text-align: left;">UserID : <?php echo $_SESSION['id']?></p>
             <form action="winkelwagen-process.php" method="post" name="submit">
                 <h1>Bestellen</h1>
                 <h2 style="text-align: left;">Jouw bestelling : </h2>
                 <?php foreach ($products as $product) : ?>
                     <p style="text-align: left;"><?php echo $product['name'] ?> </p>

                 <?php endforeach; ?>

                 <input type="hidden" id="winkelmandids" name="productid" value="<?php echo $whereIn ?> ">
                 <input type="hidden" id="userids" name="userid" value="<?php echo $_SESSION['id'] ?> ">
                 <p style="text-align: left;">
                     Kies of je het ijs wil laten bezorgen of zelf af wilt halen.
                     <select name="method" id="method">
                     <option value="LatenBezorgen">Laten bezorgen (Tegen extra kosten)</option>
                     <option value="Afhalen">Zelf Afhalen (Gratis)</option>
                 </select><br>
                 </p>

                 <label style="font-weight: 600;" for="fname">Volledige Naam :</label>
                 <input type="text" id="fullname" name="fullname"><br>
                 <!--
                 <label style="font-weight: 600;" for="zipcode">Postcode :</label>
                 !-->
                 <label style="font-weight: 600;" for="zipcode">Plaats :</label>
                 <select name="city" id="city">
                     <option value="Heiloo">Heiloo</option>
                     <option value="Limmen">Limmen</option>
                     <option value="Akersloot">Akersloot</option>
                 </select><br>

                 <label style="font-weight: 600;" for="address">Adres :</label>
                 <input type="text" id="address" name="address"><br>
                 <!-- <label style="font-weight: 600;" for="pickup">Bezorg of Afhaaltijd : </label>
                 <input type="time" id="zipcode" name="pickup"> <br>  -->
                 <input type="submit" name="submit" value="Plaats bestelling" style="background-color: rgb(6, 153, 221); color:black;">
             </form>

    </div>
</body>

</html>