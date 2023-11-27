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
function getAllPostsData($conn) {
    $sql = "SELECT * FROM posts";

    $result = mysqli_query($conn, $sql);
    $postsData = array();

    if ($result && mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $postsData[] = $row;
        }
        mysqli_free_result($result);
    } else {
        echo "";
    }

    return $postsData;
}

function getLoggedInUserID() {
    return isset($_SESSION['user']) ? $_SESSION['user'] : null;
}

?>