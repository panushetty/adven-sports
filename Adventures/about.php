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
      
       <a href="index.php">Home</a>
       <a href="adven.php">Adventures</a>
       <a href="#">About us</a>
       <a  class=far id=login_page href="user.html"><?php echo $name;?></a>
       <a  id=login_page href="logout.php">Logout</a>
       </div>

<div class="header">
<div class=headermenu >
      
       <a href="index.php">Home</a>
       <a href="adven.php">Adventures</a>
       <a href="#">About us</a>
       <a  class=far id=login_page href="user.html"><?php echo $name;?></a>
       <a  id=login_page href="logout.php">Logout</a>
</div>
     <img src="newlogo.png">
</div>
<div class="contact-j">
  <div class="relative"><img src="contact3.png" style="width:100%;height: 375px;opacity: 0.80;">
  
 </div>
 </div>
<div class="w3-content" style="max-width:1100px;">





“We believe everyday that we go out to see the world, We learn how to live our lives a little bit differently, definitely not always better but it always will be something new.”

- AdventureSports

All images, text links have been borrowed from the never-ending depths of the Internet, as well as our own personal experiences. If you believe that we have wrongfully copied your stuff and not credited you or have not put a link back to your organization, please mail me and I will remove that content ASAP. If you find any errors/broken links do send me a mail. We are also open to your valuable suggestions I have made sure there are enough links on this area to point you our way.
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
// When the user scrolls down 20px from the top of the document, slide down the navbar
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
        document.getElementById("scroll").style.top = "0";
    } else {
        document.getElementById("scroll").style.top = "-50px";
    }
}
</script>
</body> 
</html>