<!DOCTYPE html>
<html>
<head>
<title>Adventure sports</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="animation.css">
<link rel="stylesheet" type="text/css" href="w3.css">


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
<?php session_start();?>
<?php $name=$_SESSION["first_name"].$_SESSION["last_name"];?>
<div class=menu id="scroll">
       <a href="#">Home</a>
       <a href="adven.php">Adventures</a>
       <a href="about.php">About us</a>
       <a  class=far id=login_page href="user.html"><?php echo $name;?></a>
       <a  class=near id=login_page href="logout.php">Logout</a>
</div>

<div class="header">
<div class=headermenu >
       <a href="#">Home</a>
       <a href="adven.php">Adventures</a>
       <a href="about.php">About us</a>
       <a  class=far id=login_page href="user.html"><?php echo $name;?></a>
       <a  id=login_page href="logout.php">Logout</a>
</div>
     <img src="newlogo.png">
</div>


   
     


  <div class="content section margin-bottom show" style="max-width:80%">
    <div class="mySlides fade">
    <img  src="skydiver.jpg" style="width:100%">
    </div>
    <div class="mySlides fade">
    <img  src="speedboat.jpg" style="width:100%">
    </div>
    <div class="mySlides fade">
    <img  src="surfing.jpg" style="width:100%">
    </div>
    
  </div>

<div class="w3-content" style="max-width:1100px;">
	<div class="w3-container message">
    <h3 align="center">Carpe diem</h3>
    <p align="center">Don't miss out on latest adventures</p>
    </div>
  <div class="w3-row-padding">
  
      
      <div class="w3-container sell " id="left">
      	<img src="Trekking.jpg">
        <h3>Trekking Camp,Himachal</h3>
        <p class="w3-opacity">Starting from &#x20b9;10,000</p>
        <p>Trekking meetup at Delhi</p>
        <button class="w3-button w3-margin-bottom">More Details</button>
      </div>
  
    
      <div class="w3-container sell " id="right">
      	<img src="Bikersclub.jpg">
        <h3>Bikers Club</h3>
        <p class="w3-opacity">Cost subject to consideration with Bikers Club</p>
        <p>Jaipur to Ladakh</p>
        <button class="w3-button w3-margin-bottom">More Details</button>
      </div>

      <div class="w3-container sell " id="left">
      	<img src="riverrafting.jpg">
        <h3>River Rafting</h3>
        <p class="w3-opacity">Starting from &#x20b9;1,000</p>
        <p>Rishikesh,Uttarkkhand</p>
        <button class="w3-button w3-margin-bottom">More Detailss</button>
      </div>

      <div class="w3-container sell " id="right">
      	<img src="scubadiving.jpg">
        <h3>Scuba Diving</h3>
        <p class="w3-opsacity">Starting from &#x20b9;3500 per person</p>
        <p>Goa Tourism</p>
        <button class="w3-button w3-margin-bottom">More Details</button>
      </div>


   
  </div>

  <!-- Newsletter -->
  <div class="w3-container w3-panel w3-padding-16 w3-black  w3-card-2  margin-bottom w3-row-padding" >
    <div class="">
      <h2>Get the best offers first!</h2>
      <p>Join our newsletter.</p>
      <label>E-mail</label>
      <input class="w3-input w3-border" type="text" placeholder="Your Email address">
      <button type="button" class="w3-button w3-red w3-margin-top">Subscribe</button>
    </div>
  </div>
  
  <!-- Contact -->
  <div class="w3-container margin-bottom">
    <h2>Contact</h2>
    <p>Let us book your next trip!</p>
    <i class="fa fa-map-marker" style="width:30px"></i> Delhi, India<br>
    <i class="fa fa-phone" style="width:30px"></i> Phone: +91 XXXXXXXXXX<br>
    <i class="fa fa-envelope" style="width:30px"> </i> Email: adventuresports@mail.com<br>
    <form action="/action_page.php" target="_blank">
      <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Name" required name="Name"></p>
      <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Email" required name="Email"></p>
      <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Message" required name="Message"></p>
      <p><button class="w3-button w3-black w3-padding-large" type="submit">SEND MESSAGE</button></p>
    </form>
      
  </div>
</div>

<div class="contact-j">
  <div class="relative"><img src="contact1.jpg" style="width:100%;height: 375px;opacity: 0.80;">
  <div class="absolute"><a href="about.html"><button>About us</button></a></div>
  </div>
  
</div>

<footer class="w3-container w3-center w3-opacity ">
  <h3>Find Us On</h3>
  <h4 >&copy;AdventureSports.com</h4>
  <div class="w3-xlarge w3-padding-16">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
  </div>
  
</footer>

<script>
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
    x[myIndex-1].style.opacity = "1"; 

    setTimeout(carousel, 3000); // Change image every 2 seconds
}
</script>
<script>
// When the user scrolls down 20px from the top of the document, slide down the navbar
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 250 || document.documentElement.scrollTop > 250) {
        document.getElementById("scroll").style.top = "0";
    } else {
        document.getElementById("scroll").style.top = "-50px";
    }
}
</script>

</body>
</html>