<?php
session_start();
include("connect.php");
// Assume you fetch the email during login and set it in the session
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profile Page</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <!-- Navbar Section -->
  <div class="navbar-container fixed-navbar">
    <nav class="navbar">
      <ul>
        <li><a href="indx.php" class="nav-link">Home</a></li>
        <li><a href="about.php" class="nav-link">About Us</a></li>
        <li><a href="category.php" class="nav-link">Category</a></li>
        <li><a href="profile.html" class="nav-link active">Profile</a></li>
      </ul>
    </nav>
    <div class="buttons-container">
       <a href="logout.php"><button class="signout-btn">Signout</button></a>
    </div>
  </div>
  </div>

  <!-- Profile Section -->
  <div class="profile-container">
    <header class="profile-header">
        <div class="profile-info">

          <div class="profile-details">
          <div style=" padding:15%;">
    <p  style="font-size:50px; font-weight:400;">
    Welcome <?php 
     if(isset($_SESSION['email'])){
      $email=$_SESSION['email'];
      $query=mysqli_query($conn, "SELECT users.* FROM `users` WHERE users.email='$email'");
      while($row=mysqli_fetch_array($query)){
          echo $row['firstname'];
      }
     }
     ?>
    </p>
          </div>
        </div>
      </header>
    
  <section class="profile-container2">
    <div class="profile-header">
      <h1>Your Uploaded Artworks</h1>
    </div>

    <a href="index.php">&#8592;</a>
     
    <?php


if (!isset($_SESSION['email'])) {
    header("Location: login.php");
    exit();
}

$email = $_SESSION['email']; // Get the logged-in user's email
?>
 <?php
    $sql = "SELECT * FROM image WHERE email = '$email' ORDER BY id DESC";
    $res = mysqli_query($conn, $sql);

    if (mysqli_num_rows($res) > 0) {
        while ($row = mysqli_fetch_assoc($res)) { ?>
            <div class="uploaded-images-grid">
                <img src="uploads/<?php echo $row['upload']; ?>" width="300px" height="400px">
                
            </div>
    <?php }
    } else {
        echo "No images found.";
    }
    ?>

  </section>

  <script src="image-viewer.js"></script>
</body>
</html>



