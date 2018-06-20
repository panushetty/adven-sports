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
      
       <a href="index.php" >Home</a>
       <a href="#">Adventures</a>
       <a href="about.php">About us</a>
       <a  class=far id=login_page href="user.html"><?php echo $name;?></a>
       <a  id=login_page href="logout.php">Logout</a>
</div>

<div class="header">
<div class=headermenu >
      
       <a href="index.php">Home</a>
       <a href="#">Adventures</a>
       <a href="about.php">About us</a>
       <a  class=far id=login_page href="user.html"><?php echo $name;?></a>
       <a  id=login_page href="logout.php">Logout</a>
</div>
     <img src="newlogo.png">
</div>



<h3></h3>
 <div class="w3-content" style="max-width:1100px;">
		
  <div class="w3-row-padding">
  
      
      <div class="w3-container sell  position-pic" id="left" style="background-color: black">
      	<img src="rafting1.jpg">
        
      </div>

      <div class="w3-container sell  position-info" id="right"  >
        <h3>River Rafting</h3>
        <p class="w3-opacity">Starting from &#x20b9;1,000</p>
        <p>Rishikesh,Uttarkkhand</p>
        <p>Rafting and white water rafting are recreational outdoor activities which use an inflatable raft to navigate a river or other body of water. </p>
      </div>

      

      
  
    
      
  </div>

  
  
  
</div>


  <!--<div class="relative"><img src="contact1.jpg" style="width:100%;height: 375px;opacity: 0.80;">
  <div class="absolute"><a href="about.html"><button>About us</button></a></div>
  </div>-->
  





<footer class="w3-container w3-center w3-opacity margi-top  ">
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
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("scroll").style.top = "0";
    } else {
        document.getElementById("scroll").style.top = "-50px";
    }
}
</script>

</body>
</html>


