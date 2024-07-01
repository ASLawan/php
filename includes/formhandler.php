<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $firstName = htmlspecialchars($_POST["firstname"]);
    $lastName = htmlspecialchars($_POST["lastname"]);
    $favpet = htmlspecialchars($_POST["favoritepet"]);


    if (empty($firstName) or empty($lastName)) {
        exit();
        header("Location: ../index.php");
    }
    echo "This is the data submitted:";

    echo "<br>";
    echo "Firstname: $firstName";
    echo "<br>";
    echo "Lastname: $lastName";
    echo "<br>";
    echo "Favourite Pet: $favpet";
    echo "<br>";

    //header("Location: ../index.php");
} else {
    header("Location: ../index.php");
}