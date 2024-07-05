<?php

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = $_POST["username"];
    $password = $_POST["password"];


    try{
        require_once "db.php";

        // *************USING NON-NAMED PARAMETERS**************//

        // $query = "INSERT INTO users(username, passwd, email)VALUES (?, ?, ?);";

        // $stmt = $conn->prepare($query);

        // $stmt->execute([$username, $password, $email]);

        //  ************USING NAMED PARAMETERS***************//

        $query = "DELETE FROM users WHERE username = :username AND passwd = :passwd;";

        $stmt = $conn->prepare($query);

        $stmt->bindParam(":username", $username);
        $stmt->bindParam(":passwd", $password);
        

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