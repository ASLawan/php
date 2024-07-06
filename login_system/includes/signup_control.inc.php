<?php
// HANDLES EVERYTHING THAT HAS TO DO WITH BUSINESS LOGIC
declare(strict_types=1);

// check if form fields are all filled

function is_input_empty(string $username, string $password, string $email){
    if (empty($username) || empty($password) || empty($email)){
        return true;
    } else {
        return false;
    }

}

// check if email is valid

function is_email_invalid(string $email){
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
        return true;
    } else {
        return false;
    }
}

// check if username is taken

function is_username_taken(object $conn, string $username){
    if (get_username($conn, $username)){
        return true;
    } else {
        return false;
    }
}

// check if email is registered

function is_email_registered(object $conn, string $email){
    if (get_email($conn, $email)){
        return true;
    } else {
        return false;
    }
}

// CREATE USER

function create_user(object $conn, string $username, string $password, string $email){
    set_user($conn, $username, $password, $email);
}