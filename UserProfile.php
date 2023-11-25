<?php
session_start();

include "database.php";
$conn = getConnection();

// Fetch user's name from the database based on the logged-in user's ID
$userID = $_SESSION["user"];
$sql = "SELECT full_name FROM users WHERE id = ?";
$stmt = mysqli_stmt_init($conn);
if (mysqli_stmt_prepare($stmt, $sql)) {
    mysqli_stmt_bind_param($stmt, "i", $userID);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $userData = mysqli_fetch_assoc($result);
    $userName = $userData['full_name'];
} else {
    // Handle database error if necessary
    $userName = "User";
}

// Update user's bio if submitted
if (isset($_POST['submit_bio'])) {
    $bio = $_POST['bio'];
    $updateSql = "UPDATE users SET bio = ? WHERE id = ?";
    $updateStmt = mysqli_stmt_init($conn);
    if (mysqli_stmt_prepare($updateStmt, $updateSql)) {
        mysqli_stmt_bind_param($updateStmt, "si", $bio, $userID);
        mysqli_stmt_execute($updateStmt);
        // Optionally, you can provide a success message here
    } else {
        // Handle database error if necessary
    }
}

// Fetch user's bio from the database
$bioSql = "SELECT bio FROM users WHERE id = ?";
$bioStmt = mysqli_stmt_init($conn);
if (mysqli_stmt_prepare($bioStmt, $bioSql)) {
    mysqli_stmt_bind_param($bioStmt, "i", $userID);
    mysqli_stmt_execute($bioStmt);
    $bioResult = mysqli_stmt_get_result($bioStmt);
    $bioData = mysqli_fetch_assoc($bioResult);
    $userBio = $bioData['bio'];
} else {
    // Handle database error if necessary
    $userBio = "";
}

if (isset($_POST['submit_name'])) {
    $newName = $_POST['new_name'];

    // Update the user's name in the database
    $updateNameSql = "UPDATE users SET full_name = ? WHERE id = ?";
    $updateNameStmt = mysqli_stmt_init($conn);
    if (mysqli_stmt_prepare($updateNameStmt, $updateNameSql)) {
        mysqli_stmt_bind_param($updateNameStmt, "si", $newName, $userID);
        mysqli_stmt_execute($updateNameStmt);
        $userName = $newName; // Update the displayed name
    } else {
        // Handle database update error if necessary
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">

    <script>
        function toggleEdit(section) {
            var editSection = document.getElementById(section + "EditSection");
            var displaySection = document.getElementById(section + "DisplaySection");

            if (editSection.style.display === "none") {
                editSection.style.display = "block";
                displaySection.style.display = "none";
            } else {
                editSection.style.display = "none";
                displaySection.style.display = "block";
            }
        }
    </script>

</head>
<body>
<div class="container">
        <h1 style="text-align: center;">User Profile</h1><br>

        <div class="text-center">
        
        <?php
            $userID = $_SESSION["user"];
            $profileimgURL ="";
        
            $getImageQuery = "SELECT profile_image_path FROM users WHERE id = '$userID'";
            $result = mysqli_query($conn, $getImageQuery);

            if ($result) {
                $row = mysqli_fetch_assoc($result);
                $profileImage = $row['profile_image_path'];

                // Close the result set
                mysqli_free_result($result);

                // Close the database connection
                mysqli_close($conn);

                $profileimgURL = $profileImage;
            } else {
                // Error in the query
                echo "Error retrieving profile image: " . mysqli_error($conn);
            }

           echo '<img src="uploads/'.$profileimgURL. '" style="width:200px; height:200px; object-fit:cover; border-radius:50%">';
        ?>

        <!-- Display user's name -->  
        <div id="nameDisplaySection" style="display: flex; justify-content: center; align-items: center;">
        <h2 style="color: white; text-align: center;"><?php echo $userName; ?></h2>
        <button onclick="toggleEdit('name')" style="width: 80px; height: 25px; font-size: 12px;">Edit Name</button>
        </div>


        <!-- Form to edit user's name (Initially hidden) -->
        <div id="nameEditSection" style="display: none;">
            <form action="UserProfile.php" method="post">
                <div class="form-group">
                    <input type="text" name="new_name" class="form-control" placeholder="Enter new name">
                </div>
                <div class="form-group">
                    <input type="submit" value="Save Name" name="submit_name" class="btn btn-primary">
                </div>
                <button onclick="toggleEdit('name')">Cancel</button>
            </form>
        </div>

        <!-- Display user's bio -->
        
   
        <h5 style= "color: white; text-align: center;"><?php echo $userBio; ?></h5>
        <button onclick="toggleEdit('bio')" style="width: 80px; height: 25px; font-size: 12px;">Edit Bio</button>
        

        <!-- Form to edit user's bio (Initially hidden) -->
        <div id="bioEditSection" style="display: none;">
            <form action="UserProfile.php" method="post">
                <div class="form-group">
                    <textarea name="bio" id="bio" rows="4" class="form-control"><?php echo $userBio; ?></textarea>
                </div>
                <div class="form-group">
                    <input type="submit" value="Save Bio" name="submit_bio" class="btn btn-primary">
                </div>
            </form>
            <button onclick="toggleEdit('bio')">Cancel</button>
        </div>
        </div>

        <a href="profile.php">Edit Profile</a><br>
        <a href="index.php">Back to Home</a>
    </div>
</body>
</html>
