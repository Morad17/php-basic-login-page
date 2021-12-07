<?php

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "php-basic-login-system";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

if (!$conn) {
    die("Connection Failed:". mysqli_connection_error());
}