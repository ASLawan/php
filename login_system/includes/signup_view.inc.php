<?php

//  HANDLES EVERYTHING THAT HAS TO DO WITH FRONTEND RENDERING
declare(strict_types=1);

// signup form
function signup_inputs(){
    if (isset($_SESSION["signup_data"]["username"]) && !isset($_SESSION["errors_signup"]["username_taken"])){
        echo '<label for="username">Username:</label>';
        echo '<input type="text" name="username" id="" placeholder="username" value="'. $_SESSION["signup_data"]["username"].'">';
    } else {
        echo '<label for="username">Username:</label>';
        echo '<input type="text" name="username" id="" placeholder="username">';
    }
    echo '<br>';
    echo '<label for="password">Password:</label>
        <input type="password" name="password" id="" placeholder="password">';
    echo "<br>";
    if (isset($_SESSION["signup_data"]["email"]) && !isset($_SESSION["errors_signup"]["email_used"]) && !isset($_SESSION["errors_signup"]["invalid_email"])){
        echo '<label for="email">Email:</label>';
        echo '<input type="email" name="email" id="" placeholder="email" value="'. $_SESSION["signup_data"]["email"].'">';
    } else {
        echo '<label for="email">Email:</label>';
        echo '<input type="email" name="email" id="" placeholder="email">';
    }
    echo "<br>";
}

function check_signup_errors(){
    if (isset($_SESSION['errors_signup'])){
        $errors = $_SESSION['errors_signup'];

        echo "<br>";

        foreach ($errors as $error){
            echo "<p style='color: red;'>$error</p>";
        }

        unset($_SESSION['errors_signup']);
    } else {
        if (isset($_GET["signup"]) && $_GET["signup"] === "success"){
            echo "<br>";
            echo "<p style='color: green'>Successfuly signed up!</p>";
        }
    }
}

