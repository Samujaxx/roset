<?php
session_start();

require 'includes/database.php';


$sql = "SELECT * FROM users WHERE id = {$_SESSION['id']}";

if($_SESSION['id'] == 0)
{
    header("Location: login.php");
}

if ($result = mysqli_query($conn, $sql)) {
    $user = mysqli_fetch_assoc($result);
}

//query met id om data op te halen.  $_SESSION['userData']['id'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="includes/css/account.css">
    <link rel="stylesheet" href="includes/css/main.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <title>Home</title>
</head>
    <body>

    <?php 
    include("navbar.php"); 
    include("mainmenu.php");
    ?>

                <div class="flex-containers-right">
                    <h1>Uw gegevens</h1>
                    <?php
                    if (!empty($_SESSION['userData'])) {
                    if ($_SESSION["logged_in"] == true) {  ?>
                    <h2 style="text-align: left;">
                    <?php echo "ID : " . $_SESSION['userData']['id'];?><br>
                    Rol: <?php echo $user["role"]?><br>
                    Voornaam : <?php echo $user["firstname"] ?><br>
                    Achternaam : <?php echo $user["lastname"] ?><br>
                    Email : <?php echo $user["email"]?><br>
                    Geboortedatum : <?php echo $user["date_of_birth"]?><br>
                    Telefoonnummer : <?php echo $user["phonenumber"]?><br>
                    Adres : <?php echo $user["adress"]?><br>
                    Postcode : <?php echo $user["zipcode"]?><br>
                    Stad : <?php echo $user["city"]?><br>
                    </h2>
                    <h3>
                    <a href="account-edit.php?id=<?php echo $_SESSION['userData']['id']?>" style="color: green;">Gegevens Updaten</a>
                    <a style="color: red;" href="logout.php?id=<?php echo $_SESSION['userData']['id']?>">Uitloggen</a>
                    <?php
                    if ($_SESSION['userData']['role'] == 'medewerker' || $_SESSION['userData']['role'] == 'manager' ){
                        echo '<p style="text-align:left;">';
                        echo "<a href=dashboard.php>Dashboard voor medewerkers</a>";
                        echo '</p>';
                    }
                    ?>
                    </h3>
                    </p>
                </div>

                <?php }
                } else {
                    echo "<h2>";
                    echo "Je bent nog niet ingelogd, registreer of log in"; ?>

                    <li><a href="registreren.html">Registreren</a></li>
                    <li><a href="login.php">Inloggen</a></li>
                </h2>
                

                <?php }  ?>

                

                <div class="content-c" style="display: none;">
                    <h3>Populaire Smaken</h3>
                    <p>Aardbei</p>
                    <img src="../Website-Roset/images/smaken/aardbei.png" class="img-c">
                    <p>Mango</p>
                    <img src="../Website-Roset/images/smaken/mango.png" class="img-c">
                </div>
                <div class="content-footer" style="display: none;">
                    <aside class="footer-left">
                        <h3>Ons Adres:</h3>
                        <p>Castricum</p>
                    </aside>         
                    <aside class="footer-center">
                        <h3>Wij bezorgen in...</h3>
                        <p>Heiloo $12</p>
                        <p>Limmen $12</p>
                        <p>Akersloot $15</p>
                    </aside>
                    <aside class="footer-right">
                        <h3 style="text-decoration: underline; color:blue;">Onze voorwaarden</h3>
                    </aside>
                </div>
            </div>
    </body>
</html>