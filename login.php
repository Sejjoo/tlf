<?php
session_start();
if (isset($_SESSION["user"])) {
    header("Location: index.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
    <h1 style="text-align: center;">Login</h1><br>
    
        <?php
        if (isset($_POST["login"])) {
            $email = $_POST["email"];
            $password = $_POST["password"];
            include "database.php";
            $conn = getConnection();
            $sql = "SELECT id, password FROM users WHERE email = ?";
            $stmt = mysqli_stmt_init($conn);
            if (mysqli_stmt_prepare($stmt, $sql)) {
                mysqli_stmt_bind_param($stmt, "s", $email);
                mysqli_stmt_execute($stmt);
                $result = mysqli_stmt_get_result($stmt);
                if ($row = mysqli_fetch_assoc($result)) {
                    if (password_verify($password, $row["password"])) {
                        $_SESSION['user'] = $row["id"]; // Storing user ID in session
                        header("Location: index.php");
                        exit();
                    } else {
                        echo "<div class='alert alert-danger'> Password does not match </div>";
                    }
                } else {
                    echo "<div class='alert alert-danger'> Email does not exist </div>";
                }
            } else {
                echo "<div class='alert alert-danger'> SQL statement preparation error </div>";
            }
        }
        
        ?>
        <form action="login.php" method="post">
            <div class="form-group">
                <input type ="email" placeholder="Enter Email: " name ="email" class="form-control"> 
            </div>
            <div class="form-group">
                <input type ="password" placeholder="Enter Password: " name ="password" class="form-control"> 
            </div>
            <a href="forgot-password.php" class="forgot-password-link">Forgot Password?</a>
        <div class="centered-container">
            <div class="form-btn">
                <input type="submit" value="Login" name="login" class="btn btn-primary">    
            </div>
        </div>
        </form>

        <div><p> Not registered yet? <a href="registration.php"> Register </a></p></div>
    </div>
</body>
</html>