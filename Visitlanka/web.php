<!DOCTYPE html>
<?php

if(isset($_POST['click'])){  

    $name   =   $_POST['name'];
    $email  =   $_POST['email'];
    $msg=   $_POST['msg'];
    
    $to         = "mohananura1@gmail.com";
    $subject    = "New Message from Visit Sri Lanka Tours and Travels";
    
    $message    = "<h3>Message from - ". $name ."</h3>";
    $message    .= $msg;
    
    $header     = "From:". $email ." \r\n";
    $header     .= "Cc:udara128@gmail.com \r\n";
    $header     .= "MIME-Version: 1.0\r\n";
    $header     .= "Content-type: text/html\r\n";
    
    $retval = mail ($to,$subject,$message,$header);
    
    if( $retval == true )
    {
        $s_msg = "Your email has been sent. We will contact you as soon as possible";
    }
    else
    {
        $e_msg = "There has been an error. Please try again";
    }

}
?>
<html>
<title>Visit Sri Lanka Travels & Tours</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/font.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <link href="css/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="css/vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
    <link href="css/font-face.css" rel="stylesheet" type="text/css">
    <link href="css/landing-page.min.css" rel="stylesheet">

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

  <!--  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", Arial, Helvetica, sans-serif}
</style>
<body class="w3-light-grey">

 
  
<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-black w3-card">
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
     
    <a href="#" class="w3-bar-item w3-button w3-padding-large">HOME</a>
    <a href="#packages" class="w3-bar-item w3-button w3-padding-large w3-hide-small">PACKAGES</a>
    <a href="#photos" class="w3-bar-item w3-button w3-padding-large w3-hide-small">PHOTOS</a>
    <a href="#about" class="w3-bar-item w3-button w3-padding-large w3-hide-small">ABOUT</a>
    <a href="#comments" class="w3-bar-item w3-button w3-padding-large w3-hide-small">COMMENTS</a>
    <a href="#contact" class="w3-bar-item w3-button w3-padding-large w3-hide-small">CONTACT</a>
    
    
  </div>
</div>

<!-- Navbar on small screens -->
<div id="navDemo" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px">
  <a href="#packages" class="w3-bar-item w3-button w3-padding-large">PACKAGES</a>
  <a href="#photos" class="w3-bar-item w3-button w3-padding-large">PHOTOS</a>
  <a href="#about" class="w3-bar-item w3-button w3-padding-large">ABOUT</a>
  <a href="#comments" class="w3-bar-item w3-button w3-padding-large">COMMENTS</a>
  <a href="#contact" class="w3-bar-item w3-button w3-padding-large">CONTACT</a>
  
  
</div>
<!-- Header -->
<header class="w3-display-container w3-content" style="max-width:1500px;">
  <!-- Page content -->


  <!-- Automatic Slideshow Images -->
  <div class="mySlides w3-display-container w3-center">
    <img src="image/wall/0kandy.jpg" style="width:100%">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
      <h3>Kandy</h3>
      <p><b>Hill capital of Sri Lanka</b></p>   
    </div>
  </div>
  <div class="mySlides w3-display-container w3-center">
    <img src="image/wall/yala.jpg" style="width:100%">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
      <h3>Yala national park</h3>
      <p><b>Enjoy a safari and wildlife watching!</b></p>    
    </div>
  </div>
  <div class="mySlides w3-display-container w3-center">
    <img src="image/wall/passekuda.jpg" style="width:100%">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
      <h3>Pasikuda</h3>
      <p><b>Beautiful Beach</b></p>    
    </div>
  </div>
</header>

<!-- Page content -->
<div class="w3-content" style="max-width:1532px;">

  <div class="w3-container w3-margin-top" id="packages">
    
    <h6>Sri Lanka is a land like no other for breathtaking sight seining, ancient monuments, sculptures, caving, beautiful coastlines, great natural diversity and many more, which, no doubt makes it a perfect tourist destination. In case you intend to plan a memorable tour of this magical island, there is the place where the experts are there to guide you. Your tours shall depend on the time at your disposal and your interests.</h6>
    <br>
  
  
 <h3>PACKAGES</h3>
   <h6> While we offer pre planned packages, we also design Sri Lanka tour packages according to your requirements. Let us know what you'd like to do, see, and where you'd like to go and We'll plan your holiday in Sri Lanka!.</h6>
   </div>
  <div class="w3-row-padding w3-padding-16">
    <div class="w3-third w3-margin-bottom">
      
      <div class="w3-container w3-white">
        <h3>Pre Planned Packages</h3>
        <h6 class="w3-opacity">From $50 per day</h6>
        <p>Accomodation and meals will be arranged according to your requirements</p>
        <p>Safty,Comforts and Enjoyment</p>
		<p>Please click below to find out more.</p>
        
        <a href="packages.html" class="w3-button w3-block w3-black w3-margin-bottom" role="button" >Pre planned packages</a></p>
      </div>
    </div>
    <div class="w3-third w3-margin-bottom">
      
      <div class="w3-container w3-white">
        <h3>Create your own tour</h3>
        <h6 class="w3-opacity">From $50 per day</h6>
        <p>We will help you to create your own tour according to your time and budget.</p>
        <p>Please inform us of the duration of the tour, your budget and the places you want to visit and I will send you my proposals of tour plan trough email</p>
        
        <a href="#contact" class="w3-button w3-block w3-black w3-margin-bottom" role="button" >Contact us</a></p>
      </div>
    </div>
    <div class="w3-third w3-margin-bottom">
      
      <div class="w3-container w3-white">
        <h3>Excrusions</h3>
        <h6 class="w3-opacity">Excrusions from Kandy</h6><br><br>
        <p>Excrusions from kandy to the destination you want</p><br>
        <p>Click below to find out destinations</p>
        
        <a href="packages.html" class="w3-button w3-block w3-black w3-margin-bottom" role="button" >Excrusions</a></p>
      </div>
    </div>
  </div>
  <div class="w3-container" id="photos">
    
    <h3>Traveling. Tours. Adventure.</h3>
    <h6>Sri Lanka is one of the most beautiful and culturally rich places on the planet.</h6>

    <h3>Photos</h3>
  </div>
  
  <div class="w3-row-padding w3-padding-16 w3-text-white w3-large">
    <div class="w3-half w3-margin-bottom">
      <div class="w3-display-container">
        <img src="image/gallery/index-gallery/Sigiriya.jpg" alt="Sigiriya" style="width:100%">
        <span class="w3-display-bottomleft w3-padding">Sigiriya</span>
      </div>
    </div>
    <div class="w3-half">
      <div class="w3-row-padding" style="margin:0 -16px">
        <div class="w3-half w3-margin-bottom">
          <div class="w3-display-container">
            <img src="image/gallery/index-gallery/Ella.jpg" alt="Ella" style="width:100%">
            <span class="w3-display-bottomleft w3-padding">Ella</span>
          </div>
        </div>
        <div class="w3-half w3-margin-bottom">
          <div class="w3-display-container">
            <img src="image/gallery/index-gallery/Anuradhapura.jpg" alt="Anuradhapura" style="width:100%">
            <span class="w3-display-bottomleft w3-padding">Anuradhapura</span>
          </div>
        </div>
      </div>
      <div class="w3-row-padding" style="margin:0 -16px">
        <div class="w3-half w3-margin-bottom">
          <div class="w3-display-container">
            <img src="image/gallery/index-gallery/Polonnaruwa.jpg" alt="Polonnaruwa" style="width:100%">
            <span class="w3-display-bottomleft w3-padding">Polonnaruwa</span>
          </div>
        </div>
        <div class="w3-half w3-margin-bottom">
          <div class="w3-display-container">
            <img src="image/gallery/index-gallery/Mirissa.jpg" alt="Mirissa" style="width:100%">
            <span class="w3-display-bottomleft w3-padding">Mirissa </span>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="w3-row-padding" id="about">
    <div class="w3-col l4 m7">
      <p align="left"><a href="gallery.php" class="btn btn-info" role="button" >VIEW MORE</a></p>
      <br>

      <h3>About</h3>
      <p><h5>Create your own holiday with good Tour Operators in Sri Lanka. We’ll help you to plan your holiday in 
    sri lanka and we will arrange all your travel arrangements in Sri Lanka at an affordable price.<br>
From the very moment of your arrival at the Airport of the Island and till your departure, comfortable transport 
and accommodation can be provided.<br><br>
You will be provided with a reliable driver and air conditioned vehicle for comfortable transport throughout the 
 tour. Your safety, your comforts and your enjoyment thorough out the tour is guaranteed. <br>We provide,
<ul><li>Your Own Vehicle</li><li>Your Own Tourist Driver (Licensed)</li><li>Flexibility to cater for your individual needs</li><li>Your accommodation which will suite to your budget/interest.</li></h5>
    </p>
    </div>
    <div class="w3-col l8 m5">
      <div class="w3-content" style="max-width:900px;margin-top:70px;margin-bottom:70px">
      <img src="image/wall/rsz_about.jpg" style="width:100%">

      </div>
    </div>
  </div>
  
  <div class="w3-row w3-large w3-center" style="margin:32px 0">
    <div class="w3-third"><i class="fa fa-map-marker w3-text-red"></i> Kandy,Sri Lanka</div>
    <div class="w3-third"><i class="fa fa-phone w3-text-red"></i> Phone: 0094772363736</div>
    <div class="w3-third"><i class="fa fa-envelope w3-text-red"></i> Email: mohananura@yahoo.com</div>
  </div>
  

  <div class="w3-row-padding" id="comments">
   
    <section class="testimonials text-center bg-light">
      <div class="container" style="height: 50%">
        <h2 class="mb-5">What people are saying...</h2>
        <div class="row">
          <div class="col-lg-4">
            <div class="testimonial-item mx-auto mb-5 mb-lg-0">
              <img class="img-fluid rounded-circle mb-3" src="image/comments/comment1.jpg" alt="">
              <h5><a href="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fkamal.arham%2Fposts%2F10155507103874107%3A0&width=500">Kamal Arham</a></h5>
              <p class="font-weight-light mb-0">"One of the most honest guides you will encounter during your travel."</p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="testimonial-item mx-auto mb-5 mb-lg-0">
              <img class="img-fluid rounded-circle mb-3" src="image/comments/comment2.jpg" alt="">
              <h5><a href="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fsowmyashree.bs%2Fposts%2F10154224123745060%3A0&width=500">Sowmyashree Bs</a></h5>
              <p class="font-weight-light mb-0">"My children think of him everyday and my son says that Anura was his best part of Srilanka."</p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="testimonial-item mx-auto mb-5 mb-lg-0">
              <img class="img-fluid rounded-circle mb-3" src="image/comments/comment3.jpg" alt="">
              <h5><a href="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fyvonne.carneross%2Fposts%2F10155550457502489%3A0&width=500">Yvonne Carne-Ross</a></h5>
              <p class="font-weight-light mb-0">"You really won’t find a more helpful, honest , reliable and careful driver and guide to give you the very best of Sri Lanka. He will locate good accommodation and at excellent prices. "</p>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="testimonial-item mx-auto mb-5 mb-lg-0">
              
              <h5></h5>
              
            </div>
          </div>
          <div class="col-lg-4">
            <div class="testimonial-item mx-auto mb-5 mb-lg-0">
              
              <h5></h5>
              
            </div>
          </div>
          <div class="col-lg-4">
            <div class="testimonial-item mx-auto mb-5 mb-lg-0">
              
              <h5></h5>
              
            </div>
          </div>
          <div class="col-lg-4">
            <div class="testimonial-item mx-auto mb-5 mb-lg-0">
              
              <h5></h5>
              
            </div>
          </div>
          <div class="col-lg-4">
            <div class="testimonial-item mx-auto mb-5 mb-lg-0">
              <a href="Comment.php" class="btn btn-info" role="button">VIEW MORE</a>
              
            </div>
          </div>
          <div class="col-lg-4">
            <div class="testimonial-item mx-auto mb-5 mb-lg-0">
              
              <h5></h5>
              
            </div>
          </div>
        </div>
      </div>
    </section>
  
</div>


  <div class="w3-container" id="contact">
    <h2>Contact</h2>
    <p>If you have any questions, do not hesitate to ask them.</p>
    <i class="fa fa-map-marker w3-text-red" style="width:30px"></i> Kandy,Sri Lanka<br>
    <i class="fa fa-phone w3-text-red" style="width:30px"></i>  0094772363736<br>
    <i class="fa fa-envelope w3-text-red" style="width:30px"> </i>  mohananura@yahoo.com<br><br>
    <form action="./web.php" method="post">
      <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Name" required name="name"></p>
      <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Email" required name="email"></p>
      <p><textarea class="w3-input w3-padding-16 w3-border"  placeholder="Message" required name="msg"></textarea> </p>
      <p><button class="w3-button w3-black w3-padding-large" type="submit" name="click">SEND MESSAGE</button></p>
	<p><?php if(isset($e_msg)){echo $e_msg;} else if(isset($s_msg)){echo $s_msg;} else{}?></p>
    </form>
  </div>

<!-- End page content -->
</div>

<!-- Footer -->
<footer class="w3-padding-32 w3-black w3-center w3-margin-top">
    <div class="w3-row-padding">
      <div class="w3-col m3">
        <iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2Fvisitsrilankatoursandtravels%2F&width=450&layout=standard&action=like&size=small&show_faces=true&share=true&height=80&appId=799179070232349" width="300" height="80" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true">
        </iframe>    
      </div>
    
      <div class="w3-col m3">
        <article class="footbox last">
            <h5><U>Useful Links</U></h5>
              <a href="https://www.booking.com/index.html?aid=343336&label=operasoft-sdO15-343336&utm_source=Opera&utm_medium=web&utm_campaign=sdO15">
              <img src="image/ads/booking-com.png"  style="width:35%;height:35%;">
              </a>
              <br>
              <a href="https://www.tripadvisor.com">
                <img src="image/ads/tripad.png"  style="width:30%;height:30%;background-color: white">
              </a>
              
          </article>
      </div>

      <div class="w3-col m3">
        
        <a href="http://www.eta.gov.lk/slvisa/">
                <img src="image/ads/visa-process.jpg"  style="width:30%;height:30%;background-color: white">
              </a>
      </div>
      <div class="w3-col m3">
        
              <p>2018 Visit Sri Lanka Tours and Travels.</p>
      </div>
    </div>
 
  


</footer>


<script>
// Automatic Slideshow - change image every 4 seconds
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 4000);    
}

// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else { 
        x.className = x.className.replace(" w3-show", "");
    }
}

// When the user clicks anywhere outside of the modal, close it
var modal = document.getElementById('ticketModal');
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

</body>
</html>

