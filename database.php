<?php

function getConnection() {
    $hostName = "localhost";
    $dbUser = "root";
    $dbPassword = "";
    $dbName = "login_register";

    $conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    return $conn;
}

function getLoggedInUserID() {
    return isset($_SESSION['user']) ? $_SESSION['user'] : null;
}


?>