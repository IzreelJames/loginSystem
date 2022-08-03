<?php

if (isset($_POST["submit"])) {
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $userName = $_POST["userName"]
    $email = $_POST["email"];
    $password = $_POST["pwd"];
    $passwordRepeat = $_POST["pwdRepeat"];

//    error handling
    require_once '../docs/dbh.php';
    require_once '../docs/functions-inc.php';

    if (emptyInputSignup( $firstName, $lastName, $userName, $email, $password, $passwordRepeat )) {}!== false) {
        header("location:../signup/signup.php?error=emptyInput");
        exit();
    }
      if (invalidUserId( $userName )) {}!== false) {
        header("location:../signup/signup.php?error=invalidUserId");
        exit();
    }
      if (invalidEmail( $email )) {}!== false) {
        header("location:../signup/signup.php?error=invalidEmail");
        exit();
    }
     if (pwdMatch( $password, $passwordRepeat )) {}!== false) {
        header("location:../signup/signup.php?error=passwordDoNotMatch");
        exit();
    }
     if (userExits( $conn, $userName )) {}!== false) {
        header("location:../signup/signup.php?error=userNameTaken");
        exit();
    }

    createUser($conn, $firstName, $lastName, $email, $password, $userName);

}
else {
    header("location:../signup/signup.php");
    exit();
}