<?php

require 'includes/database.php';
require 'includes/session.php';

//pakt de id uit de url
$id = $_GET["id"];

//selecteer de row met de bijbehoorende informatie van de id
$sql = "SELECT * FROM users WHERE id = $id LIMIT 1";

//inject de query in sql
if ($result = mysqli_query($conn, $sql)) {

    //zet de informatie in een associative array
    $user = mysqli_fetch_assoc($result);

    //als het niets find dan terug naar account pagina
    if (is_null($user)) {
        header("location: account.php");
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta description="account edit page">
    <link rel="stylesheet" href="includes/css/account.css">
    <link rel="stylesheet" href="includes/css/main.css">
    <title>Home</title>
</head>

<body>

    <?php
    include("navbar.php");
    include("mainmenu.php");
    ?>
    <div class="flex-containers-right">
        <div class="title">
            <h2>Je gegevens bewerken</h2>
            </div>
            <div class="info">
            <form action="account-edit-process.php" method="post">
                <input type="hidden" name="id" value="<?php echo $user["id"] ?>">
                <div class="form-group">
                    <label for="exampleInputfirstname">Voornaam</label>
                    <input type="text" class="form-control" name="firstname" value="<?php echo $user["firstname"] ?>">
                </div>
                <div class="form-group">
                    <label for="exampleInputlastname">Achternaam</label>
                    <input type="text" class="form-control" name="lastname" value="<?php echo $user["lastname"] ?>">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail">Email</label>
                    <input type="text" class="form-control" name="email" value="<?php echo $user["email"] ?>">
                </div>
                <div class="form-group">
                    <label for="exampleInputGeboortedatum">Geboortedatum</label>
                    <input type="date" class="form-control" name="date_of_birth" value="<?php echo $user["date_of_birth"] ?>">
                </div>
                <div class="form-group">
                    <label for="exampleInputTelefoonnummer">Telefoonnummer</label>
                    <input type="text" class="form-control" name="phone" value="<?php echo $user["phone"] ?>">
                </div>
                <div class="form-group">
                    <label for="exampleInputTelefoonnummer">Adres</label>
                    <input type="text" class="form-control" name="address" value="<?php echo $user["adress"] ?>">
                </div>
                <div class="form-group">
                    <label for="exampleInputTelefoonnummer">Postcode</label>
                    <input type="text" class="form-control" name="zipcode" value="<?php echo $user["zipcode"] ?>">
                </div>
                <div class="form-group">
                    <label for="exampleInputTelefoonnummer">Stad</label>
                    <input type="text" class="form-control" name="city" value="<?php echo $user["city"] ?>">
                </div>
                <button name="submit" type="submit" class="button1">Update</button>
            </form>
        </div>
    </div>
</body>

</html>