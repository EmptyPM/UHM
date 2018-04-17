<!DOCTYPE html>
<html>
<title>Comments</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
body {font-family: "Times New Roman", Georgia, Serif;}
h1,h2,h3,h4,h5,h6 {
    font-family: "Playfair Display";
    letter-spacing: 5px;
}
</style>
<body>
  <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.10";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-black w3-card">
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
     
    <a href="web.php" class="w3-bar-item w3-button w3-padding-large">HOME</a>
    <a href="#packages" class="w3-bar-item w3-button w3-padding-large w3-hide-small">PACKAGES</a>
    <a href="gallery.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">PHOTOS</a>
    
    
    
  </div>
</div>

<!-- Navbar on small screens -->
<div id="navDemo" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px">
  <a href="#packages" class="w3-bar-item w3-button w3-padding-large">PACKAGES</a>
  <a href="gallery.php" class="w3-bar-item w3-button w3-padding-large">PHOTOS</a>
  
</div>
</header>
<!-- Image Header -->
<div class="w3-display-container w3-animate-opacity">
  <img src="image/gallery/GalleryCover01.jpg" alt="boat" style="width:100%;min-height:350px;max-height:600px;">
  
</div>

<!-- Page content -->
<div class="w3-content" style="max-width:1300px">

  <!-- About Section -->
  <div class="w3-row w3-padding-64" id="about">
    <div class="w3-col m6 w3-padding-large w3-hide-small">
     <img src="image/gallery/Ella-train-01.jpg" class="w3-round w3-image w3-opacity-min" alt="Table Setting" width="600" height="750">
    </div>

    <h1 class="w3-center" >Comment Your Ideas Below</h1><br>
      
      <div class="post" >
        <div class="entry" >
       
        <div class="fb-comments" data-href="https://www.facebook.com/LearnSpace-125734904740793/" data-width="400" data-numposts="5" ></div>
        </div>
      </div>
  
  <hr>
  
 
</div>
</div>

<!-- Footer -->
<footer class="w3-padding-32 w3-black w3-center w3-margin-top style="max-width:1500px;">

    <div class="w3-row-padding">
      <div class="w3-third">
        <iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2Fvisitsrilankatoursandtravels%2F&width=450&layout=standard&action=like&size=small&show_faces=true&share=true&height=80&appId=799179070232349" width="300" height="50" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe> 
        </div>
        </div>   
     
  </footer>

</body>
</html>