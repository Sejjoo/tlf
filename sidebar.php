<?php
session_start();
include "database.php";
$conn = getConnection();
// Fetch user's name from the database based on the logged-in user's ID
$userID = getLoggedInUserID();
// Query to get the profile image URL from the 'signup' table
$getFullNameQuery = "SELECT full_name FROM users WHERE id = '$userID'";
$result = mysqli_query($conn, $getFullNameQuery);

if ($result) {
    $row = mysqli_fetch_assoc($result);
    $userName = $row['full_name'];

    // Close the result set
    mysqli_free_result($result);

    
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
  <title>The Lasallian Folio</title>
  <!-- Link Styles -->
  <link rel="stylesheet" href="css/sidebar.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
  <div class="sidebar">
    <div class="logo_details">
      <i class="bx bxl-audible icon"></i>
      <div class="logo_name"><br>The Lasallian<br>Folio</div>
      <i class="bx bx-menu" id="btn"></i>
    </div>
    <ul class="nav-list">
      <br>
      <li>
        <a href="index.php">
          <i class="bx bx-news"></i>
          <span class="link_name">For You</span>
        </a>
        <span class="tooltip">For You</span>
      </li>
      <li>
        <a href="about.php">
          <i class="bx bx-info-circle"></i>
          <span class="link_name">About</span>
        </a>
        <span class="tooltip">About</span>
      </li>
      <li>
        <a href="following.php">
          <i class="bx bx-heart"></i>
          <span class="link_name">Following</span>
        </a>
        <span class="tooltip">Following</span>
      </li>
      <li>
        <a href="discover.php">
          <i class="bx bx-layout"></i>
          <span class="link_name">Discover</span>
        </a>
        <span class="tooltip">Discover</span>
      </li>
      <li>
        <a href="contact.php">
          <i class="bx bx-wallet"></i>
          <span class="link_name">Your Plans</span>
        </a>
        <span class="tooltip">Your Plans</span>
      </li>
      <li>
        <a href="UserProfile.php">
          <i class="bx bx-user"></i>
          <span class="link_name">Profile</span>
        </a>
        <span class="tooltip">Profile</span>
      </li>
      <li class="profile">
        <div class="profile_details">
        <?php
            $userID = $_SESSION["user"];
            $profileimgURL ="";
        
            $getImageQuery = "SELECT profile_image_path FROM users WHERE id = '$userID'";
            $result = mysqli_query($conn, $getImageQuery);

            if ($result) {
                $row = mysqli_fetch_assoc($result);
                $profileImage = $row['profile_image_path'];

                // Close the database connection
                mysqli_close($conn);

                $profileimgURL = $profileImage;
            } else {
                // Error in the query
                echo "Error retrieving profile image: " . mysqli_error($conn);
            }
            ?>
        <img src="uploads/<?php echo $profileimgURL; ?>" alt="profile image">
          <div class="profile_content">
            <?php 
            $userName = '<span style="color:white; font-size:20px;">' . htmlspecialchars($userName, ENT_QUOTES, 'UTF-8') . '</span>';
            echo $userName; ?>
            <div class="designation">Student</div>
          </div>
        </div>       
        <a href="logout.php" id="log_out">
          <i class="bx bx-log-out"></i>
        </a>       
      </li>
    </ul>
  </div>
  <!-- Scripts -->
  <script src="js/script.js"></script>
</body>
</html>