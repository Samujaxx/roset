<<<<<<< HEAD
<?php
include("includes/session.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="includes/css/main.css">
    <link rel="stylesheet" href="includes/css/login-register.css">
    <title>Registreer je hier!</title>
</head>

<body>

    <?php
    include("navbar.php");
    include("mainmenu.php");
    ?>

    <div class="flex-containers-right">
        <h1 class="head-title"> Registreer je hier</h1>
        <form class="login-register-form" action="register-check.php" method="POST">
            <div class="txt_field">
                <input type="text" required id="name" name="name">
                <label>naam</label>
            </div>
            <div class="txt_field">
                <input type="text" required id="lastname" name="lastname">
                <label>achternaam</label>
            </div>
            <div class="txt_field">
                <input type="text" required id="email" name="email">
                <label>email</label>
            </div>
            <div class="txt_field">
                <input type="date" required id="birthday" name="birthday">
            </div>
            <div class="txt_field">
                <input type="text" required id="phone" name="phone">
                <label>telefoonnummer</label>
            </div>
            <div class="txt_field">
                <input type="password" required id="password" name="password">
                <label>wachtwoord</label>
            </div>
            <button class="button" wwtype="submit" id="submit">registreer</button>
        </form>
    </div>

</body>
=======
<?php
include("includes/session.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="includes/css/main.css">
    <link rel="stylesheet" href="includes/css/login-register.css">
    <title>Registreer je hier!</title>
</head>

<body>

    <?php
    include("navbar.php");
    include("mainmenu.php");
    ?>

    <div class="flex-containers-right">
        <h1 class="head-title"> Registreer je hier</h1>
        <form class="login-register-form" action="register-check.php" method="POST">
            <div class="txt_field">
                <input type="text" required id="name" name="name">
                <label>naam</label>
            </div>
            <div class="txt_field">
                <input type="text" required id="lastname" name="lastname">
                <label>achternaam</label>
            </div>
            <div class="txt_field">
                <input type="text" required id="email" name="email">
                <label>email</label>
            </div>
            <div class="txt_field">
                <input type="date" required id="birthday" name="birthday">
            </div>
            <div class="txt_field">
                <input type="text" required id="phone" name="phone">
                <label>telefoonnummer</label>
            </div>
            <div class="txt_field">
                <input type="password" required id="password" name="password">
                <label>wachtwoord</label>
            </div>
            <button class="button" wwtype="submit" id="submit">registreer</button>
        </form>
    </div>

</body>

>>>>>>> 6bbc53697c42e3d67c18b41738de8bb586628dbf
</html>