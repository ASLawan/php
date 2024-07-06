<?php
    require_once 'includes/config.session.inc.php';
    require_once 'includes/signup_view.inc.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Login System</title>
</head>
<body>
    <h3>Signup</h3>
    <form action="includes/signup.inc.php" method="POST">
        <!-- <label for="username">Username:</label>
        <input type="text" name="username" id="" placeholder="username">
        <br>
        <label for="password">Password:</label>
        <input type="password" name="password" id="" placeholder="password">
        <br>
        <label for="email">Email</label>
        <input type="email" name="email" id="" placeholder="email">
        <br> -->
        <?php
            signup_inputs();
        ?>
        <button type="submit">Signup</button>
    </form>

    <h3>Login</h3>
    <form action="includes/login.inc.php" method="POST">
        <label for="username">Username:</label>
        <input type="text" name="username" id="" placeholder="username">
        <br>
        <label for="password">Password:</label>
        <input type="password" name="password" id="" placeholder="password">
        <br>
        <button type="submit">Login</button>
    </form>

    <?php
        check_signup_errors();
    ?>
</body>
</html>