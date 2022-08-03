<?php

function emptyInputSignup( $firstName, $lastName, $userName, $email, $password, $passwordRepeat ) {
    $result;
    if (empty( $firstName) || empty($lastName) || empty($userName) || empty($email) || empty($password) || empty($passwordRepeat)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function invalidUserId( $userName)
{
    $result;
    if (preg_match("/^[a-zA-Z0-9]*$/"), $userName)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}


function invalidEmail( $email)
{
    $result;
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $result = true;
} else {
    $result = false;
}
    return $result;
}

function pwdMatch( $password, $passwordRepeat)
{
    $result;
    if ($pwd !== $passwordRepeat) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function userIdExists( $userpassword, $passwordRepeat)
{

}