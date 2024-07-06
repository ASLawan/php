<?php

// HANDLES EVERYTHING THAT HAS TO DO WITH FRONTEND RENDERING

function check_login_errors(){
    if (isset($_SESSION["errors_login"])){
        $errors = $_SESSION["errors_login"];

        echo "<br>";

        foreach($errors as $error){
            echo '<p style="color: red;">' . $error . '</p>';
        }

        unset($_SESSION["errors_login"]);
    } else if (isset($_GET["login"]) && $_GET["login"] === "success"){
        echo "<br>";
        echo '<p style="color; green">Successfully Logged in</p>';
    }
}

// output current logged in user, username

function output_username(){
    if (isset($_SESSION["user_id"])){
        echo '<p style="color: green;">You are logged in as:<b>' . $_SESSION["user_username"]. '</b></p>';
    } else {
        echo '<p style="color: red;">You are not logged in!</p>';
    }
}