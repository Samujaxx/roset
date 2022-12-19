<?php
include("includes/session.php");
require('includes/database.php');
require('includes/user-access.php');

if (empty($_SESSION['userData'])) {

    header("Location: login.php");
}

$sql = "SELECT * FROM users ";

if ($result = mysqli_query($conn, $sql)) {
    $users = mysqli_fetch_all($result, MYSQLI_ASSOC);
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
                        <th>Voornaam</th>
                        <th>Achternaam</th>
                        <th>email</th>
                        <th>Rol</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($users as $user) : ?>
                        <tr style="text-align: center;">
                            <td><?php echo $user["id"] ?></td>
                            <td><?php echo $user["firstname"] ?></td>
                            <td><?php echo $user["lastname"] ?></td>
                            <td><?php echo $user["email"] ?></td>
                            <td><?php echo $user["role"] ?></td>
                            <td><a style="color: red;" href="includes/admin/user-delete.php?id=<?php echo $user["id"] ?>" class="btn btn-danger">Delete</a></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <div class="buttons">
           <button> <a style="color: red;" href="logout.php?id=<?php echo $_SESSION['userData']['id'] ?>">Uitloggen</a> </button>

        </div>
    </div>
</body>

</html>