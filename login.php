<?php 
    include("includes/session.php"); 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In!</title>
    <link rel="stylesheet" href="includes/css/main.css">
    <link rel="stylesheet" href="includes/css/login-register.css">
</head>

<body>
<?php 
    include("navbar.php"); 
    include("mainmenu.php");
    ?>

    <div class="flex-containers-right">
        <h1 class="head-title"> Log hier in met je account</h1>
            <form class="login-register-form" action="login-check.php" method="POST">
                <div class="txt_field">
                    <input type="text" required id="email" name="email">
                    <label>email</label>
                </div>
                <div class="txt_field">
                    <input type="password" required id="password" name="password">
                    <label>password</label>
                </div>
                <button class="button" wwtype="submit" id="submit">Login</button>
                <a href="register.php">geen account? registreer je hier!</a>
            </form>
    </div>
</body>

</html>