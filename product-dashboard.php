<?php
include("includes/session.php");
require('includes/database.php');
require('includes/user-access.php');

$sql = "SELECT * FROM products ";

if ($result = mysqli_query($conn, $sql)) {
    $products = mysqli_fetch_all($result, MYSQLI_ASSOC);
}

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
    <link rel="stylesheet" href="includes/css/main.css">
    <link rel="stylesheet" href="includes/css/dashboard.css">
    <title>Winkelmandje</title>
</head>

<body>
    <?php
    include("user-navbar.php");
    include("mainmenu.php");
    ?>

    <div class="flex-containers-right">
        <div class="title">
            <h1>Gebruikers overzicht</h1>
        </div>
        <div class="info">
            <table>
                <thead>
                    <tr>
                        <th>id</th>
                        <th>product</th>
                        <th>prijs</th>
                        <th>FOTW</th>
                        <th>categorie</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($products as $products) : ?>
                        <tr style="text-align: center;">
                            <td><?php echo $products["id"] ?></td>
                            <td><?php echo $products["name"] ?></td>
                            <td><?php echo $products["price_kg"] ?></td>
                            <td><?php echo $products["fotw"] ?></td>
                            <td><?php echo $products["category"] ?></td>
                            <td><a style="color: red;" href="includes/admin/product-delete.php?id=<?php echo $products["id"] ?>" class="btn btn-danger">Delete</a></td>
                            <td><a style="color: green;" href="product-edit.php?id=<?php echo $products["id"] ?>" class="btn btn-danger">update</a></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <div class="buttons">
            <button><a style="color: red;" href="logout.php?id=<?php echo $_SESSION['userData']['id'] ?>">Uitloggen</a></button>
            <button><a style="color: green;" href="product-add.php?id=<?php echo $_SESSION['userData']['id'] ?>">product toevoegen</a></button>

        </div>
    </div>
</body>

</html>