<!DOCTYPE html>
<html>
<style>

body 
{
   /* background-color: #CCFFE5;*/
    background-repeat: no-repeat;
	background-image:url('img/s1.jpg');
	background-size:cover;
}
body {margin:0;}

.topnav 
{
  overflow: hidden;
  background-color: #333;
}

.topnav a 
{
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover 
{
  background-color: #ddd;
  color: black;
}

.topnav .icon 
{
  display: none;
}

@media screen and (max-width: 600px) 
{
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon 
  {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) 
{
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon 
   {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a 
  {
    float: none;
    display: block;
    text-align: left;
  }

}
</style>

<body>

<div class="main">

<h1 style="color:white";>MUSICAL INSTRUMENTS STORE</h1>
<hr>

<div class="topnav" id="myTopnav">
  <a href="home.php">Home</a>
  <a href="contact.html">Contact</a>
  <a href="about.html">About</a>
  <a href="logout.php">Logout</a>
  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>

</div>
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

$con = mysqli_connect('localhost', 'root', '');

if(!$con)
	echo "Unable to connect";

$db = mysqli_select_db($con, 'MUSICANA');
	if(!$db)
		echo "Not able to connect";
	
$user=$_SESSION['sess_username'];		
$query = mysqli_query($con,"Select * from USER WHERE email_id='$user'");
$row1=mysqli_fetch_row($query);
if(!$query)
{
	echo "error executing the query".mysqli_error($con);
}
if(!$row1)
{
	echo "error".mysqli_error($con);
}

$fname=$row1[1];
$lname=$row1[2];
$pno=$row1[4];
$email=$row1[3];

$id =$_GET['id1'];
$quant= $_GET['qnty'];
$q1=mysqli_query($con,"Select * from MUSICAL_INSTRUMENTS WHERE key1=$id");

if(!$q1)
{
	echo "error executing the query".mysqli_error($con);
}
$row2=mysqli_fetch_row($q1);

$cost=$row2[2]*$quant;
$name=$row2[1];
//echo $name;
//echo $id;
if(!$row2)
{
	echo '<center><h1 style="color:red;">';
	echo "error: NO STOCK!!";
	echo '</h1></center>';
}
else
{

echo '<center>';
				echo '<h1 style="color:red;">Payment Detail<h1/>';
				echo '<h3 style="color:black;">';
				echo 'Name : '.$fname.' '.$lname;
				echo '<br/>';
				echo 'Email-ID : '.$email;
				echo '<br/>';
				echo 'Phone No. : '.$pno;
				echo '<br/>';
				echo 'Ordered Instrument : '.$name;
				echo '<br/>';
				echo 'Quantity : '.$quant;
				echo '<br/>';
				echo 'Total Amount:'."	"."Rs.".$cost."/-";
				echo '<br/>';
				echo '<br/>';
				echo '<h3 style="color:green;">THANKS FOR PURCHASING....VISIT AGAIN!</h3>';
				echo '<h3/>';
				echo '<center/>';

}
mysqli_close($con);
		
?>
</body>
</html>
	