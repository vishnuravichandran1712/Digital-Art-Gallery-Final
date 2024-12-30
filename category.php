<?php
session_start();
include("connect.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Categories</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="navbar-container fixed-navbar">
        <nav class="navbar">
          <ul>
            <li><a href="indx.php" class="nav-link">Home</a></li>
            <li><a href="about.php" class="nav-link">About Us</a></li>
            <li><a href="category.php" class="nav-link active">Category</a></li>
            <li><a href="profile.php" class="nav-link">Profile</a></li>
          </ul>
        </nav>
        <div class="buttons-container">
           <a href="logout.php"><button class="signout-btn">Sign out</button></a>
        </div>
    </div>
  <header>
  </header>
  <main class="categories-container">
    <section class="category" id="nature">
        <div class="image-grid-categories">
          <h2 class="ca-na">Nature</h2>
          <img src="image/A beautiful evening near the beach.jpg" alt="Nature 1" class="ci1">
          <img src="image/Small Memory, Mikael Gustafsson.jpg" alt="Nature 2" class="ci2" height="350px">
          <img src="image/Anime Natur Tapete.jpg" alt="Nature 3" class="ci3" height="350">
          <img src="image/Nature's Essence_ A Minimalist Ode to Beauty.jpg" alt="Nature 4" class="ci4" height="350px">
          <img src="image/Pirate's Bay.jpg" alt="Nature 5" class="ci5" height="350px">

        </div>
    </section>

    <section class="category" id="food">
      
      <div class="image-grid-categories">
        <h2 class="ca-na">Food</h2>
        <img src="image/Metal Poster Displate _Ramen Japanese Food_.jpg" alt="Nature 1" class="ci6" height="350px">
        <img src="image/Indian Thali Art Oil Painting Digital Art Food illustration Indian Art Instant Download Home Décor Kitchen Décor Wall Art 300 DPI Art Gift.jpg" alt="Nature 2" class="ci7" height="350px">
        <img src="image/_Pancake Perfection_.jpg" alt="Nature 3" class="ci8">
        <img src="image/Whiskey Digital Print.jpg" alt="Nature 4" class="ci9" height="350px">
        <img src="image/download.jpg" alt="Nature 5" class="ci10" height="350px">
      </div>
    </section>
    <section class="category" id="animals">
        
        <div class="image-grid-categories">
          <h2 class="ca-na">Animals</h2>
          <img src="image/deer.jpg" alt="Nature 1" class="ci11" height="350px">
          <img src="image/lion.jpg" alt="Nature 2" class="ci12" height="700px">
          <img src="image/ele.jpg" alt="Nature 3" class="ci13" height="350px">
          <img src="image/Nature's Essence_ A Minimalist Ode to Beauty.jpg" alt="Nature 4" class="ci14" height="350px">
          <img src="image/whale.jpg" alt="Nature 5" class="ci15" height="350px">
        </div>
      </section>
      <div class="image-viewer" id="imageViewer">
    <button class="close-btn" id="closeViewer">&times;</button>
    <button class="arrow left" id="prevImage">&#8249;</button>
    <img id="viewerImage" src="" alt="Image Viewer">
    <button class="arrow right" id="nextImage">&#8250;</button>
  </div>
  </main>
 
  <script src="image-viewer.js"></script>
  </body>
  </html>
