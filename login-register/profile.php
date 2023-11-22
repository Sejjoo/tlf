<?php
session_start();
require_once "database.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">

    <h1 style="text-align: center;">Edit Profile</h1><br>
        <?php

        $userID = $_SESSION["user"];
       
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            if (isset($_POST["update_username"])) {
                if (isset($_POST["current_password"]) && isset($_POST["new_email"])) {
                    $currentPassword = $_POST["current_password"];
                    $newEmail = $_POST["new_email"];
        
                    // Check if the current password is correct
                    $passwordCheckSql = "SELECT password FROM users WHERE id = ?";
                    $passwordCheckStmt = mysqli_stmt_init($conn);
                    mysqli_stmt_prepare($passwordCheckStmt, $passwordCheckSql);
                    mysqli_stmt_bind_param($passwordCheckStmt, "i", $userID);
                    mysqli_stmt_execute($passwordCheckStmt);
                    $passwordCheckResult = mysqli_stmt_get_result($passwordCheckStmt);
                    $row = mysqli_fetch_assoc($passwordCheckResult);
        
                    if ($row && password_verify($currentPassword, $row["password"])) {
                        // Check if the new email already exists in the database
                        $checkEmailSql = "SELECT id FROM users WHERE email = ? AND id != ?";
                        $checkEmailStmt = mysqli_stmt_init($conn);
                        mysqli_stmt_prepare($checkEmailStmt, $checkEmailSql);
                        mysqli_stmt_bind_param($checkEmailStmt, "si", $newEmail, $userID);
                        mysqli_stmt_execute($checkEmailStmt);
                        $existingUser = mysqli_stmt_get_result($checkEmailStmt);
                        $existingUserData = mysqli_fetch_assoc($existingUser);
        
                        if ($existingUserData) {
                            echo "<div class='alert alert-danger'>Email already exists</div>";
                        } else {
                            $updateEmailSql = "UPDATE users SET email = ? WHERE id = ?";
                            $updateEmailStmt = mysqli_stmt_init($conn);
                            mysqli_stmt_prepare($updateEmailStmt, $updateEmailSql);
                            mysqli_stmt_bind_param($updateEmailStmt, "si", $newEmail, $userID);
                            mysqli_stmt_execute($updateEmailStmt);
        
                            echo "<div class='alert alert-success'>Username updated successfully</div>";
                        }
                    } else {
                        echo "<div class='alert alert-danger'>Incorrect current password</div>";
                    }
                } else {
                    echo "<div class='alert alert-danger'>Missing fields for updating username</div>";
                }
            }
            if (isset($_POST["update_password"])) {
                $currentPassword = $_POST["current_password"];
                $newPassword = $_POST["new_password"];
                $confirmPassword = $_POST["confirm_password"];
        
                $sql = "SELECT password FROM users WHERE id = ?";
                $stmt = mysqli_stmt_init($conn);
                mysqli_stmt_prepare($stmt, $sql);
                mysqli_stmt_bind_param($stmt, "i", $userID);
                mysqli_stmt_execute($stmt);
                $result = mysqli_stmt_get_result($stmt);
                $row = mysqli_fetch_assoc($result);
        
                if (password_verify($currentPassword, $row["password"])) {
                    if ($newPassword === $confirmPassword) {
                        $passwordHash = password_hash($newPassword, PASSWORD_DEFAULT);
                        $updatePassSql = "UPDATE users SET password = ? WHERE id = ?";
                        $updatePassStmt = mysqli_stmt_init($conn);
                        mysqli_stmt_prepare($updatePassStmt, $updatePassSql);
                        mysqli_stmt_bind_param($updatePassStmt, "si", $passwordHash, $userID);
                        mysqli_stmt_execute($updatePassStmt);
        
                        echo "<div class='alert alert-success'>Password updated successfully</div>";
                    } else {
                        echo "<div class='alert alert-danger'>New password and confirm password do not match</div>";
                    }
                } else {
                    echo "<div class='alert alert-danger'>Incorrect current password</div>";
                }
            }
        }
        ?>
        

        <form action="profile.php" method="post">
            <div class="form-group">
                <p> Change Username </p>
                <input type="text" class="form-control" name="new_email" placeholder="New Email (Username)"><br>
                <input type="password" class="form-control" name="current_password" placeholder="Current Password"> <br>
                <div class="form-btn">
                <input type="submit" class="btn btn-primary" name="update_username" value="Update"><br>
                </div>
            </div>
        </form>

        <form action="profile.php" method="post">
            <div class="form-group">
                <p> Change Password  </p>
                <input type="password" class="form-control" name="current_password" placeholder="Current Password" > <br>
                <input type="password" class="form-control" name="new_password" placeholder="New Password"><br>
                <input type="password" class="form-control" name="confirm_password" placeholder="Confirm New Password"><br>
                <div class="form-btn">
                <input type="submit" class="btn btn-primary" name="update_password" value="Update"><br>
                </div>
            </div>
        </form>

        <div>

        <a href="UserProfile.php">Back to Profile</a>
        <p><a href="index.php">Back to Home</a></p></div>
    </div>
</body>
</html>
