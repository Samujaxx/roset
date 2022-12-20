<?php
include("includes/session.php");
require('includes/database.php');
require('includes/user-access.php');

if (empty($_SESSION['userData'])) {

    header("Location: login.php");
}

$sql = "SELECT *, orders.id AS order_id FROM orders 
                    join users on users.id = orders.user_id
                    join products on products.id = orders.product_id";
if ($result = mysqli_query($conn, $sql)) {
    $orders = mysqli_fetch_all($result, MYSQLI_ASSOC);
}

$sqledit = "SELECT * FROM orders";
if ($result = mysqli_query($conn, $sqledit)) {
    $orderedit = mysqli_fetch_all($result, MYSQLI_ASSOC);
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta description="user dashboard">
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
                        <th>user</th>
                        <th>product</th>
                        <th>datum</th>
                        <th>adres</th>
                        <th>naam</th>
                        <th>woonplaats</th>
                        <th>ophalen</th>
                        <th>bezorgen</th>
                        <th>bezorgd</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($orders as $order) : ?>
                        <tr style="text-align: center;">
                            <td><?php echo $order["firstname"] ?></td>
                            <td><?php echo $order["name"] ?></td>
                            <td><?php echo $order["orderdate"] ?></td>
                            <td><?php echo $order["adress"] ?></td>
                            <td><?php echo $order["customer_name"] ?></td>
                            <td><?php echo $order["city"] ?></td>
                            <td><?php echo $order["pickup"] ?></td>
                            <td><?php echo $order["delivery"] ?></td>
                            <td><?php echo $order["isReceived"] ?></td>
                            <td><a style="color: red;" href="includes/admin/order-delete.php?id=<?php echo $order["order_id"] ?>" class="btn btn-danger">Delete</a></td>
                            <td><a style="color: green;" href="order-edit.php?id=<?php echo $order["order_id"] ?>" class="btn btn-danger">update</a></td>
                        </tr>
                    <?php endforeach;?>
                </tbody>
            </table>
        </div>
        <div class="buttons">
           <button> <a style="color: red;" href="logout.php?id=<?php echo $_SESSION['userData']['id'] ?>">Uitloggen</a> </button>

        </div>
    </div>
</body>

</html>