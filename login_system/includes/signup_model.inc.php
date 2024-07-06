<?php

// HANDLES EVERYTHING THAT HAS TO DO WITH DATABASE

declare(strict_types=1);

// retrieve username from database

// $conn is the database connection obtained from signup.inc.php

function get_username(object $conn, string $username){

    $query = "SELECT username FROM users WHERE username = :username;";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(":username", $username);
    $stmt->execute();

    // use fetch to retrieve a single data unit

    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}

// retrieve user email

function get_email(object $conn, string $email){

    $query = "SELECT username FROM users WHERE email = :email;";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(":email", $email);
    $stmt->execute();

    // use fetch to retrieve a single data unit

    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}


// creaees user in the database
function set_user(object $conn, string $username, string $password, string $email){

    $query = "INSERT INTO users (username, passwd, email) VALUES (:username, :passwd, :email);";
    $stmt = $conn->prepare($query);

    $options = [
        'cost' => 12
    ];

    $hashedpwd = password_hash($password, PASSWORD_BCRYPT, $options);

    $stmt->bindParam(":username", $username);
    $stmt->bindParam(":passwd", $hashedpwd);
    $stmt->bindParam(":email", $email);

    $stmt->execute();

    // use fetch to retrieve a single data unit

//     $result = $stmt->fetch(PDO::FETCH_ASSOC);
//     return $result;
    }