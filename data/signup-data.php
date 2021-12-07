<?php

if (isset($_POST['submit'])) {

    $fullname = $_POST["fullname"];
    $email = $_POST["email"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $password_retype = $_POST["password_retype"];

    require_once 'dbh-data.php';
    require_once 'functions-data.php';

    //User Signup Error Handlers

    if (emptyInputSignup($fullname, $email, $username, $password, $password_retype) !== false) {
        header("location: ../signup.php?error=emptyinput");
        exit();
    }
    if (invalidUserid($username) !== false) {
        header("location: ../signup.php?error=invaliduserid");
        exit();
    }
    if (invalidEmail($email) !== false) {
        header("location: ../signup.php?error=invalidemail");
        exit();
    }
    if (passwordMatch($password, $password_retype) !== false) {
        header("location: ../signup.php?error=passworddontmatch");
        exit();
    }
    if (useridExists($conn, $username, $email) !== false) {
        header("location: ../signup.php?error=usernametaken");
        exit();
    }

    createUser($conn, $fullname, $email, $username, $password);

} else {
    header("location: ../signup.php");
    exit();
}
