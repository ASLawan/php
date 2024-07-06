<?php

// HANDLES EVERYTHING THAT HAS TO DO WITH BUSINESS LOGIC
declare(strict_types=1);

// check if form fields are all filled

function is_input_empty(string $username, string $password){
    if (empty($username) || empty($password)){
        return true;
    } else {
        return false;
    }

}

// check if username is wrong
function is_username_wrong(bool | array $result){
    if (!$result){
        return true;
    } else {
        return false;
    }
}


// check if password is wrong

function is_password_wrong(string $password, string $hashedpwd){
    if (!password_verify($password, $hashedpwd)){
        return true;
    } else {
        return false;
    }
}
