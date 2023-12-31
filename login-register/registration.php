<?php
  session_start();
  if (isset($_SESSION["user"])) {
    header("Location: index.php");
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container"> 
        <h1 style="text-align: center;">Registration</h1><br>
        <?php

        if (isset($_POST["submit"])) {
            $fullName = $_POST["fullname"];
            $StudID = $_POST["studID"];
            $email = $_POST["email"];
            $password = $_POST["password"];
            $passwordRepeat = $_POST["repeat_password"];

            $passwordHash = password_hash($password, PASSWORD_DEFAULT);
                
            $errors = array();

            if (empty($fullName) OR empty($email) OR empty($password) OR empty($passwordRepeat) OR empty($StudID)) {
                array_push($errors, "All fields are required");
            }
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                array_push($errors, "Email is Invalid");
            }
            if (strlen($password) < 8) {
                array_push($errors, "Password must be 8 characters long");
            }
            if ($password !== $passwordRepeat) {
                array_push($errors, "Password does not match");
            }

            require_once "database.php";
            $sql = "SELECT * FROM users WHERE email = ?";
            $stmt = mysqli_stmt_init($conn);
            mysqli_stmt_prepare($stmt, $sql);
            mysqli_stmt_bind_param($stmt, "s", $email);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            $rowCount = mysqli_num_rows($result);

            if ($rowCount > 0) {
                array_push($errors, "Email Already Exists");
            }

            if (count($errors) > 0) {
                foreach ($errors as $error) {
                    echo "<div class ='alert alert-danger'>$error</div>";
                }
            } else {
               

                // Handle profile image upload
                if (isset($_FILES['profile_image']) && $_FILES['profile_image']['error'] === UPLOAD_ERR_OK) {
                    $fileTmpPath = $_FILES['profile_image']['tmp_name'];
                    $fileName = $_FILES['profile_image']['name'];
                    $fileSize = $_FILES['profile_image']['size'];
                    $fileType = $_FILES['profile_image']['type'];
                    $fileNameCmps = explode(".", $fileName);
                    $fileExtension = strtolower(end($fileNameCmps));
                    $uploadDirectory = 'uploads/';

                    // Generate a unique name to prevent overwriting existing files
                    $newFileName = md5(time() . $fileName) . '.' . $fileExtension;
                    $uploadPath = $uploadDirectory . $newFileName;

                    // Move the uploaded file to the desired directory
                    if (move_uploaded_file($fileTmpPath, $uploadPath)) {
                        $sql = "INSERT INTO users (full_name, Student_ID, email, password, profile_image_path ) VALUES (?, ?, ?, ?, ?)";
                        $stmt = mysqli_stmt_init($conn);
                        mysqli_stmt_prepare($stmt, $sql);
                        mysqli_stmt_bind_param($stmt, "sssss", $fullName, $StudID, $email, $passwordHash, $uploadPath);
                        mysqli_stmt_execute($stmt);
                        echo "<div class='alert alert-success'> Registered Successfully </div>";
                    } else {
                        echo "<div class='alert alert-danger'>There was an error uploading the file</div>";
                    }
                } else {
                    echo "<div class='alert alert-danger'>Profile Image Upload Error</div>";
                }
                
            }
        }
        ?>
        
        <form action="registration.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <input type="text" class="form-control" name="fullname" placeholder="Full Name: ">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="studID" placeholder="Student ID No: ">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="email" placeholder="Email: ">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="password" placeholder="Password: ">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="repeat_password" placeholder="Repeat Password: ">
            </div>
            
            <div class="form-group">
                <label for="profile_image">Profile Image:</label>
                <input type="file" class="form-control" name="profile_image" id="profile_image" accept="image/*">
            </div>

            <div class="form-btn">
                <input type="submit" class="btn btn-primary" value="Register" name="submit">
            </div>
        </form>
        
        <div><p> Already have an account? <a href="login.php"> Login Here </a></p></div>
    </div>
</body>
</html>
