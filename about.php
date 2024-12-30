<?php
session_start();
include("connect.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About Us</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="navbar-container">
    <nav class="navbar">
      <ul>
        <li><a href="indx.php" class="nav-link">Home</a></li>
        <li><a href="about.php" class="nav-link active">About Us</a></li>
        <li><a href="category.php" class="nav-link">Category</a></li>
        <li><a href="profile.php" class="nav-link">Profile</a></li>
      </ul>
    </nav>
    <div class="buttons-container">
        <a href="logout.php"><button class="signout-btn">Signout</button></a>
    </div>
  </div>

  <section class="about-container">
    <div class="about-header">
      <center><h1>About Us</h1></center>
    </div>
    <div class="about-content2">
      <p class="ap1">
        the collection – gallery of digital art is a platform with the aim to revolutionize the concept of an art gallery. The focus lies not only on establishing an appreciation for digital art and furthermore for its collection value, which is guaranteed by a limitation of the editions as well as by the certificate of authenticity, but also on supporting emerging artists, especially those who have been underrepresented at the art market so far.
        
        The gallery´s mission also includes making digital art accessible and creating a new experience of collecting art, especially for younger generations – so that, besides feeling joy for owning a contemporary artwork, they also feel great knowing that their purchase has supported a specific young talent.
        
        the collection .</p>
        <img src="create-your-gallery.jpg" alt="" width="500px" height="270px">
    </div>
   
  </section>
  <img src="bg.jpg" alt="" height="500px" width="100%">
  <section class="about-container">
    <div class="about-header">
      <center><h1>The collection & artists</h1></center>
    </div>
    <div class="about-content1">
        <img src="FAC.avif" alt="" height="330px">
      <p class="ap">
        the collection – gallery of digital art aims to promote emerging artists and support their career. The gallery especially focuses on artists who have been underrepresented at the art market so far, which includes artists with a focus on digital drawing, digital photography, 2D & 3D animation and video art as well as artists who identify as queer and/or female, lesbian, intersex, non-binary or trans*. 

        the collection – gallery of digital art acts as an intermediary between the artists as the sellers of the artwork and the buyers and therefore represents the artists by taking on the role of their agent. Another goal of the gallery is to create possibilities for the artists to additionally show their artworks at exhibitions and at art fairs.
        
        If you are interested in being represented by the collection – gallery of digital art, please be so kind as to send your portfolio in PDF format to: office@thecollection-gallery.com. You will find further information on this subject, if you click the button “Artist Application”. 
        
        the collection – gallery of digital art is currently looking for artists in the areas of digital drawing, 2D & 3D animation and video art..</p>
    </div>
   
  </section>

  <footer class="footer">
    <img src="Group 1.png" alt="Logo" width="150px">
  </footer>

  <script src="image-viewer.js"></script>
</body>

