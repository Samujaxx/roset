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
    <link rel="stylesheet" href="includes/css/cart.css">
    <title>Winkelmandje</title>
</head>

<body>
    <?php
    include("navbar.php");
    include("mainmenu.php");
    ?>

    <div class="flex-containers-right">
    	<?php 
        if($_SESSION['role'] == "user"){ ?>
            <h1 class="head-title"> welkom bij je Winkelmandje </h1>
            <div class="cart"> zie je hier niets ga snel naar de bestellen pagina en bestel iets</div>
        <?php }
        else{ ?>
        <h1 class="head-title"> oeps </h1>
        <div class="cart"> je bent nog niet ingelogd. om te kunnen bestellen moet je inloggen</div>
        <?php } ?>
        
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
    <title>Winkelmandje</title>
</head>
<body>
<?php 
    include("navbar.php"); 
    include("mainmenu.php");
    ?>
</body>
>>>>>>> 6bbc53697c42e3d67c18b41738de8bb586628dbf
</html>