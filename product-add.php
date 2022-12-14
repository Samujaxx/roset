<?php
include("includes/session.php");
require('includes/database.php');
require('includes/user-access.php');

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
                        <h1 >Product toevoegen</h1>
                    </div> 
                    <div class="info">
                        <form action="includes/admin/product-add-process.php" method="post">
                            <h2>
                                <label for="name">Naam van het product</label>
                                <input type="text" id="name" name="name" placeholder="Voer de naam in"> <br>
                                <label for="name">Prijs per kilo</label>
                                <input type="text" id="price_per_kg" name="price_kg" placeholder="Voer de prijs in"> <br>
                                <label for="name">Categorie</label>
                                <input type="text" id="category" name="category" placeholder="Voer de categorie in">
                            </h2>
                            <button type="submit" class="button">Voeg toe</button>
                        </form>
                    </div>
                    </div>       
                </div>         
    </body>
</html>