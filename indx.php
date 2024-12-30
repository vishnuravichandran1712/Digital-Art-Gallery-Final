<?php
session_start();
include("connect.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Navbar with Separate Buttons</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="navbar-container">
    <nav class="navbar">
      <ul>
        <li><a href="#" class="nav-link active">Home</a></li>
        <li><a href="about.php" class="nav-link">About Us</a></li>
        <li><a href="category.php" class="nav-link">Category</a></li>
        <li><a href="profile.php" class="nav-link">Profile</a></li>
      </ul>
    </nav>
    <div class="buttons-container">
      <button class="upload-btn">Upload your Work</button>
      <a href="logout.php"><button class="signout-btn">Signout</button></a>
    </div>
  </div>
  
  
  <section class="main-container">
    <!-- Digital Artwork Section -->
    <div class="sec digital-artwork">
      
      <div class="image-grid">
        <h2 class="h1">Digital Artwork</h2>
        <!-- Add your 8 images -->
        <img src="image/Mystical Samurai Warrior in Moonlight - Epic Anime Art Wallpaper.jfif" alt="Artwork 1" height="350px" class="i1">
        <img src="image/Anime Scenery Wallpaper.jfif" alt="Artwork 2" height="350px" class="i2" >
        <img src="image/London watercolor, London art, London Scene, London painting, Vintage watercolor, Downloadable Prin.jpeg.jpg" alt="Artwork 3" height="350px"  class="i3">
        <img src="image/feelings sad.jpeg.jpg" alt="Artwork 1" height="350px" class="i4" >
        <img src="image/Women Digital Artwork by Dmitry O, Digital on Digital, 24 x 36 in - Contemporary Original Artwork For Sale on Saatchi Art_.jfif" alt="Artwork 2" height="300px" class="i5">
        <img src="image/wallpaperflare.com_wallpaper (4).jpg" alt="Artwork 3" height="350px"  class="i6">
        <img src="image/Watercolor Floral Woman Portrait Digital Art Print _ Instant Download Printable Artcommercial Use -.jpeg.jpg" alt="" height="350px" class="i7">
      </div>
    </div>
    <!-- Recent Digital Section -->
    <section class="section recent-digital">
      <div class="image-grid">
        <h2 class="h2">Recent Digital</h2>
        <!-- Add your 5 images -->
        <img src="image/✰Naruto.jpeg.jpg" alt="Recent 1" height="350px" class="i8">
        <img src="image/dg.jpg" alt="Recent 2" height="350px" class="i9">
        <img src="image/cat.jpg" alt="" height="350px" class="i10">
        <img src="image/download (1).jfif" alt="" class="i11" height="350px">
        <img src="image/baby.jpg" alt="" class="i12" height="350px">
        <img src="image/fruit.jpg" alt="" class="i13" height="350px">

      </div>
    </section>
    <div class="footer">
      <img src="image/Group 1.png" alt="" width="150px">
    </div>
  </div>
  <!-- Image Viewer -->
<div class="image-viewer" id="imageViewer">
  <button class="close-btn" id="closeViewer">&times;</button>
  <button class="arrow left" id="prevImage">&#8249;</button>
  <img id="viewerImage" src="" alt="Image Viewer">
  <button class="arrow right" id="nextImage">&#8250;</button>
</div>
<!-- Upload Modal -->
<div class="upload-modal" id="uploadModal">
  <div class="modal-content">
    <h2>Add Your Artworks</h2>
    <?php if (isset($_GET['error'])): ?>
		<p><?php echo $_GET['error']; ?></p>
	<?php endif  ?>
     <form action="upload.php"
           method="post"
           enctype="multipart/form-data" class="file-input" >
           <input type="file" 
                  name="my_image">
           <input type="submit" 
                  name="submit"
                  value="Upload">
     </form>
    <div class="modal-buttons">

      <button id="cancelModalBtn" class="cancel-modal-btn">Cancel</button>
    </div>
  </div>
</div>

<script src="image-viewer.js"></script>
  <script>
    // JavaScript to handle active state
    const links = document.querySelectorAll('.nav-link');
    links.forEach(link => {
      link.addEventListener('click', () => {
        links.forEach(item => item.classList.remove('active'));
        link.classList.add('active');
      });
    });
  </script>
</body>