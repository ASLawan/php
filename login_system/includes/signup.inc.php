<?php

if ($_SERVER["REQUEST_METHOD"] == "POST"){

    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    try {

        require_once 'dbh.inc.php';
        require_once 'signup_model.inc.php';
        require_once 'signup_control.inc.php';

        // ERROR HANDLING

        $errors = [];

        // check if all form fields are filled
        if (is_input_empty($username, $password, $email)){
            $errors['empty_input'] = "Fill all form fields";
        }

        // check for valid email
        if (is_email_invalid($email)){
            $errors['invalid_email'] = "Invalid email used";
        }

        // check if username is already taken
        if (is_username_taken($conn, $username)){
            $errors['username_taken'] = "Username already taken";
        }

        // check if email is registered

        if (is_email_registered($conn, $email)){
            $errors['email_used'] = "Email already registered";
        }

        require_once 'config.session.inc.php';

        if ($errors){
            $_SESSION['errors_signup'] = $errors;

            // collect already  filled data and return  to form fields
            $signup_data = [
                "username" => $username,
                "email" => $email
            ];
            $_SESSION['signup_data'] = $signup_data;

            // redirect
            header("Location: ../index.php");
            die();
        }

        // CREATE USER
        create_user($conn, $username, $password, $email);

        // redirect

        header("Location: ../index.php?signup=success");

        // close db connection

        $conn = null;

        $stmt = null;

        die();


    } catch (PDOException $e) {
        die("Query failed: " . $e.getMessag());

    }

} else {
    header("Location: ../index.php");
    die();
}