<?php
session_start();

include "database.php";
$conn = getConnection();
$postsData = getAllPostsData($conn);

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
    // Handle database error
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

if (isset($_POST['delete_bio'])) {
    $DelBio = "";
    // Update the user's name in the database
    $updateNameSql = "UPDATE users SET bio = ? WHERE id = ?";
    $updateNameStmt = mysqli_stmt_init($conn);
    if (mysqli_stmt_prepare($updateNameStmt, $updateNameSql)) {
        mysqli_stmt_bind_param($updateNameStmt, "si", $DelBio, $userID);
        mysqli_stmt_execute($updateNameStmt);
        $userBio = $DelBio; // Update the displayed name
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
    <div class="main-container">
        <div class="UserContainer">
            <h1 style="text-align: center;">User Profile</h1><br>

            <div class="text-center">

                <?php
                $userID = $_SESSION["user"];
                $profileimgURL = "";

                $getImageQuery = "SELECT profile_image_path FROM users WHERE id = '$userID'";
                $result = mysqli_query($conn, $getImageQuery);

                if ($result) {
                    $row = mysqli_fetch_assoc($result);
                    $profileImage = $row['profile_image_path'];

                    // Close the result set
                    mysqli_free_result($result);

                    $profileimgURL = $profileImage;
                } else {
                    // Error in the query
                    echo "Error retrieving profile image: " . mysqli_error($conn);
                }
                ?>



                <?php
                $conn = mysqli_connect("localhost", "root", "", "login_register");

                if ($conn->connect_error) {
                    die("connection failed");
                }

                if (isset($_POST['submit']) && isset($_FILES['profile_image'])) {
                    $userID = getLoggedInUserID();
                    $img_name = $_FILES['profile_image']['name'];
                    $img_size = $_FILES['profile_image']['size'];
                    $tmp_name = $_FILES['profile_image']['tmp_name'];
                    $error = $_FILES['profile_image']['error'];

                    if ($error === 0) {
                        if ($img_size > 10000000) {
                            $em = "Sorry, your file is too large";
                            header("Location: UserProfile.php?error=$em");
                        } else {
                            $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
                            $img_ex_lc = strtolower($img_ex);

                            $allowed_exs = array("jpg", "jpeg", "png");

                            if (in_array($img_ex_lc, $allowed_exs)) {
                                $new_img_name = uniqid("IMG-", true) . '.' . $img_ex_lc;
                                $img_upload_path = "uploads/" . $new_img_name;
                                move_uploaded_file($tmp_name, $img_upload_path);

                                echo "" . $new_img_name . "";
                                $sql = "UPDATE users SET profile_image_path = '$new_img_name' WHERE id = '$userID'";
                                $result = mysqli_query($conn, $sql);

                                $_SESSION['profile_img_url'] = $new_img_name;

                                $profileimgURL = $profileImage;
                                header("Location: UserProfile.php");
                            } else {
                                echo "<script>alert('You can't upload files of this type')</script>";
                            }
                        }
                    } else {
                        echo "<script>alert('Unknown error occured')</script>";
                    }
                } else {
                }

                $conn->close();
                ?>


                <div id="profile-picture-container">
                    <img src="uploads/<?php echo $profileimgURL; ?>" style="width:200px; height:200px; object-fit:cover; border-radius:50%" id="profile-picture">
                    <div id="profile-picture-dropdown" style="display: none;">
                        <form action="#" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <br>
                                <label for="profile_image">Change Image:</label>
                                <input type="file" class="form-control" name="profile_image" id="profile_image" accept="image/*">
                            </div>
                            <div class="form-group">
                                <button type="submit" name="submit" value="Save" class="button" style="margin-top: 0px">Save</button>
                            </div>
                        </form>
                    </div>
                </div>



                <!-- Display user's name -->
                <div id="nameDisplaySection" style="display: flex; flex-direction: column; align-items: center;">
                    <h2 style="color: white; text-align: center;"><?php echo $userName; ?></h2>
                    <button onclick="toggleEdit('name')" style="border-radius: 5px; width: 80px; height: 25px; font-size: 12px; background-color: darkgreen; color: white; margin-top: 5px;">Edit Name</button>
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
                        <button onclick="toggleEdit('name')" style="border-radius: 5px; width: 120px; height: 40px; font-size: 15px; background-color:red; color:white; margin-left: 5px;">Cancel</button>
                    </form>
                </div>

                <!-- Display user's bio -->
                <h5 style="color: white; text-align: center;"><?php echo $userBio; ?></h5>
                <button onclick="toggleEdit('bio')" style="border-radius: 5px;width: 80px; height: 25px; font-size: 12px; background-color:darkgreen; color:white;">Edit Bio</button>


                <!-- Form to edit user's bio (Initially hidden) -->
                <div id="bioEditSection" style="display: none;">
                    <form action="UserProfile.php" method="post">
                        <div class="form-group">
                            <textarea name="bio" id="bio" rows="4" class="form-control"><?php echo $userBio; ?></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Save Bio" name="submit_bio" class="btn btn-primary">
                            <input type="submit" value="Delete Bio" name="delete_bio" class="btn btn-primary">
                        </div>
                    </form>
                    <script>
                        // Function to toggle edit sections
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

                    <button onclick="toggleEdit('bio')" style="border-radius: 5px; width: 120px; height: 40px; font-size: 15px;  background-color:red; color:white; margin-left: 5px;">Cancel</button>
                </div>
            </div>

            <div class="button-container">
                <a class="button" href="profile.php">Edit Profile</a>
                <a class="button" href="index.php">Back to Home</a>
            </div>


        </div>

        <div class="container">
            <p>Write a post</p>
            <div class="status-post">
                <textarea id="statusText" rows="4" placeholder="Write your status..."></textarea>
                <button onclick="postStatus()">Post</button>
            </div>

        </div>
        <script>
            const profilePicture = document.getElementById('profile-picture');
            const profilePictureDropdown = document.getElementById('profile-picture-dropdown');

            profilePicture.addEventListener('click', () => {
                if (profilePictureDropdown.style.display === 'none') {
                    profilePictureDropdown.style.display = 'block';
                } else {
                    profilePictureDropdown.style.display = 'none';
                }
            });
        </script>
</body>

</html>