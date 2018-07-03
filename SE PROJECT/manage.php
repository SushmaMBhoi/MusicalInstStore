<?php
session_start();
$_SESSION['sess_username'];
if(isset($_SESSION['sess_username']))
{
	echo '<h4 style="color:white;">';
	echo "WELCOME ".$_SESSION['sess_username']."!";
	echo '<h4/>';
}
else
{
	echo "No session found!!";
	header('Location:adminlog.html');
}

?>

<!DOCTYPE html>
<html>
<head>
<style>

button 
{
    color: black;
    padding: 14px 20px;
    margin: 8px 0;
    border: 1px solid black;
    cursor: pointer;
	border-radius:20%;
	width: 50%;
}

button:hover 
{
    opacity: 0.8;
}

a
{
	text-decoration: none;
}

body 
{
    background-color: #0000;
    padding: 20px;
    font-family: Arial;
    background-size: cover;
	background-image:url('img/s1.jpg');
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

<h1 style="color:white;">MUSICAL INSTRUMENTS STORE</h1>
<hr>

<div class="topnav" id="myTopnav">
  <a href="manage.php">Home</a>
  <a href="adminlogout.php">Logout</a>
  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>

<center><h1>MUSICANA</h1></center>
<br/>
<center><a href="addinst.html"><button type="submit" name="submit"><h3> ADD INSTRUMENT </h3></button></a></center>
<br/>
<center><a href="addalb.html"><button type="submit" name="submit"><h3> ADD ALBUM </h3></button></a></center>
<br/>
<!--<center><a href="delete.html"><button type="submit" name="submit"><h3> DELETE </h3></button></a></center>-->
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