<?php

// HANDLES EVERYTHING THAT HAS TO DO WITH THE DATABASE

declare(strict_types=1);


// RETRIEVE USER FROM DATABASE

function get_user(object $conn, string $username){
    $query = "SELECT * FROM users WHERE username = :username;";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(":username", $username);

    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    return $result;
}