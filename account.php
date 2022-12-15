<?php
session_start();

require 'includes/database.php';


$sql = "SELECT * FROM users WHERE id = {$_SESSION['id']}";

if ($_SESSION['id'] == 0) {
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
        <h1 class="title">Uw gegevens</h1>
        <?php
        if (!empty($_SESSION['userData'])) {
            if ($_SESSION["logged_in"] == true) {  ?>
                <div class="info">
                    <h2>
                        <ul>
                            <li><?php echo "ID : " . $_SESSION['userData']['id']; ?></li>
                            <li> Rol: <?php echo $user["role"] ?></li>
                            <li> Voornaam : <?php echo $user["firstname"] ?></li>
                            <li> Achternaam : <?php echo $user["lastname"] ?></li>
                            <li> Email : <?php echo $user["email"] ?></li>
                            <li> Geboortedatum : <?php echo $user["date_of_birth"] ?></li>
                            <li> Telefoonnummer : <?php echo $user["phonenumber"] ?></li>
                            <li> Adres : <?php echo $user["adress"] ?></li>
                            <li> Postcode : <?php echo $user["zipcode"] ?></li>
                            <li> Stad : <?php echo $user["city"] ?></li>
                        </ul>
                    </h2>
                </div>
                <div class="buttons">
                    <a href="account-edit.php?id=<?php echo $_SESSION['userData']['id'] ?>" style="color: green;">Gegevens Updaten</a>
                    <a style="color: red;" href="logout.php?id=<?php echo $_SESSION['userData']['id'] ?>">Uitloggen</a>
                    <?php
                    if ($_SESSION['userData']['role'] == 'admin' || $_SESSION['userData']['role'] == 'medewerker') {
                        echo "<a href=user-dashboard.php>Dashboard voor medewerkers</a>";
                    }
                    ?>
                </div>
                </p>
    </div>

<?php }
        } else {
            echo "<h2>";
            echo "Je bent nog niet ingelogd, registreer of log in"; ?>

<li><a href="registreren.html">Registreren</a></li>
<li><a href="login.php">Inloggen</a></li>
<?php

?>
</h2>


<?php }  ?>
</div>
</body>

</html>