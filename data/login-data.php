<?php

if (isset($_POST["submit"])) {

    $username = $_POST["username"];
    $password = $_POST["password"];

    require_once 'dbh-data.php';
    require_once 'functions-data.php';

    if (emptyInputLogin($username, $password) !== false) {
        header("location: ../login.php?error=emptyinput");
        exit();
    }

        loginUser($conn, $username, $password);

    } else {
        header("location: ../login.php");
        exit();

    
}