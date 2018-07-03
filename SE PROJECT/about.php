<?php
session_start();
if(isset($_SESSION['sess_username']))
{
	//echo '<h4 style="color:black;">';
	//echo "WELCOME ".$_SESSION['sess_username']."!";
	//echo '<h4/>';
}
else
{
	echo "No session found!!";
	header('Location:login.html');
}
?>

<!DOCTYPE html>
<html>
<head>
<style>
body 
{
    background-color: #0000;
    padding: 20px;
    font-family: Arial;
    background-size: cover;
	background-image:url('img/s4.jpg');
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav .icon {
  display: none;
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }

</style>
</head>
<body>

<!-- MAIN (Center website) -->
<div class="main">

<h1 style="color:white";>MUSICAL INSTRUMENTS STORE</h1>
<hr>


<div class="topnav" id="myTopnav">
  <a href="home.php">Home</a>
  <a href="contact.php">Contact</a>
  <a href="about.php">About</a>
  <a href="logout.php">Logout</a>
  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>

<div style="padding-left:16px">
  
</div>

<br/><br/><br/><center><h1>WELCOME TO MUSICANA....!</h1>
	<h1 style="color:black;"><pre><p>This is the website which provides customer to purchase
musical instruments online.Here, we are providing various 
types of classical, western instruments and also some albums 
of well known singers.</p><pre/><h1/></center>


<script>

function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
</script>
</body>
</html>