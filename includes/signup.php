<?php

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = $_POST["username"];
    $password = $_POST["password"];
    $email = $_POST["email"];

    try{
        require_once "db.php";

        // *************USING NON-NAMED PARAMETERS**************//

        // $query = "INSERT INTO users(username, passwd, email)VALUES (?, ?, ?);";

        // $stmt = $conn->prepare($query);

        // $stmt->execute([$username, $password, $email]);

        //  ************USING NAMED PARAMETERS***************//

        $query = "INSERT INTO users (username, passwd, email) VALUES (:username, :passwd, :email);";

        $stmt = $conn->prepare($query);

        $stmt->bindParam(":username", $username);
        $stmt->bindParam(":passwd", $password);
        $stmt->bindParam(":email", $email);

        $stmt->execute();

        $conn == null;

        $stmt == null;

        header("Location: ../index.php");

        die();


    } catch(PDOExeption $e){
        die("Query failed: " .$e.getMessage());
    }
} else {
    header("Location: ../index.php");
}