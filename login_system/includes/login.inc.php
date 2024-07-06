<?php

// LOG IN

if (isset($_SERVER["REQUEST_METHOD"]) == "POST"){
    $username = $_POST["username"];
    $password = $_POST["password"];

    try {

        require_once 'dbh.inc.php';
        require_once 'login_model.inc.php';
        require_once 'login_control.inc.php';

        $errors = [];

        // check if all form fields are filled
        if (is_input_empty($username, $password)){
            $errors['empty_input'] = "Fill all form fields";
        }

        //  grab user from db
        $result = get_user($conn, $username);

        // check if username is wrong

        if (is_username_wrong($result)){
            $errors["incorrect_login"] = "Incorrect login info";
        }

        // check if password is wrong

        if (!is_username_wrong($result) && is_password_wrong($password, $result["passwd"])){
            $errors["incorrect_login"] = "Incorrect login info";
        }

        require_once 'config.session.inc.php';

        if ($errors){
            $_SESSION['errors_login'] = $errors;

            // collect already  filled data and return  to form fields
            // $signup_data = [
            //     "username" => $username,
            //     "email" => $email
            // ];
            // $_SESSION['signup_data'] = $signup_data;

            // redirect
            header("Location: ../index.php");
            die();
        }
        // Create new session id and add current signed in user id from db

        $newSessionId = session_create_id();
        $sessionId = $newSessionId . "_" . $result["id"];
        //set session id
        session_id($sessionId);

        $_SESSION["user_id"] = $result["id"];
        $_SESSION["user_username"] = $result["username"];

        //set session time
        $_SESSION['last_regeneration'] = time();

        header("Location: ../index.php?login=success");

        $conn = null;

        $stmt = null;

        die();

    } catch(PDOException $e){
        header("Location: ../index.php");
        die("Query failed: " .$e.getMessage());

    }
} else {
    header("Location: ../index.php");
    die();
}