<?php 
    include("includes/session.php");
    require("includes/database.php");
    
    $flavour_of_the_week = "SELECT * FROM products where fotw = 1 limit 1";
    
    if ($fotwresult = mysqli_query($conn, $flavour_of_the_week)) {
        $flavour = mysqli_fetch_all($fotwresult, MYSQLI_ASSOC);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta description="mainmenu">
    <link rel="stylesheet" href="includes/css/main.css">
    <title></title>
</head>
<body>
    
</body>
</html>
    <div class="flex-containers-left">
        <div class="logo"><img src="includes/images/LOGO.png" alt="LOGO"></div>
        <?php foreach ($flavour as $flavours) : ?>
            <a class="none" href="add-flavor.php?id=<?php echo $flavours['id'] ?>">
            <div class="fotw"> Smaak Van de Week!</br><img class="showcaseImg" src="includes/images/flavors/<?php echo $flavours['image']?>.webp" alt="LOGO"></br><?php echo $flavours['name'] ?></div>
            </a>
        <?php endforeach; ?>
        <div class="flavours">
            Populaire smaken!</br>
            <img class="showcaseImg" src="includes/images/flavors/aardbei.webp" alt="LOGO">
            <img class="showcaseImg" src="includes/images/flavors/banaan.webp" alt="LOGO"></br>
            <img class="showcaseImg" src="includes/images/flavors/citroen.webp" alt="LOGO">
        </div>
    </div>