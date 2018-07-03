<?php
session_start();
if(isset($_SESSION['sess_username']))
{
	echo '<h4 style="color:white;">';
	echo "WELCOME ".$_SESSION['sess_username']."!";
	echo '<h4/>';
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
* {
    box-sizing: border-box;
}

a{
	text-decoration : none;
}

a:hover{
	color:white;
	text-decoration:none;
	cursor:pointer;
}


input[type=submit]
{
	background-color: #4CAF50; /* Green */
    border: none;
	border-radius:20px;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
}

/*.sub_btn {
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
}

.sub_btn:hover {
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}*/

body 
{
    background-color: #0000;
    padding: 20px;
    font-family: Arial;
    background-size: cover;
	background-image:url('img/s1.jpg');
}

/* Center website */
div.main {
    max-width: 1000px;
    margin: auto;
}

h1 {
    font-size: 50px;
    
    word-break: break-all;
}

.row {
    margin: 10px -16px;
}

/* Add padding BETWEEN each column */

.row > .column 
{
    padding: 8px;
}

/* Create three equal columns that floats next to each other */
.column {
    float: left;
    width: 33.33%;
    display: none; /* Hide all elements by default */
}

/* Clear floats after rows */ 
.row:after {
    content: "";
    display: table;
    clear: both;
}

/* Content */
.content {
    background-color: grey;
    padding: 10px;
	background-image:url('img/w6.jpe');
	background-repeat:no-repeat;
	background-size:cover;
}
/* The show class is added to the filtered elements */
.show {
  display: block;
}


body {margin:0;}

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

<h2></h2>
<!--<input type="radio" onclick="filterSelection('all')" name="category" checked> Show all-->
<input type="radio" onclick="filterSelection('classical')" name="category"> Classical
<input type="radio" onclick="filterSelection('western')" name="category"> Western
<input type="radio" onclick="filterSelection('album')" name="category"> Albums <br/>

Instruments : 
<input type="radio" onclick="filterSelection('#below 2000')" name="category"> <2000/-
<input type="radio" onclick="filterSelection('#below 5000')" name="category"> <5000/-
<input type="radio" onclick="filterSelection('#below 5500')" name="category"> <5500/- <br/>

Albums :
<input type="radio" onclick="filterSelection('#below 250')" name="category"> <250/-
<input type="radio" onclick="filterSelection('#below 600')" name="category"> <600/-

<!--Gallery Grid -->

<div class="row">
<form action = "payinst.php" method="GET">
  <div class="column classical">
    <div class="content">
      <img src="img/harmonyum.jpg" alt="Hamronyum" width="120px" height="90px">
      <h4>Harmonyum</h4>
	   <p align="right">Prize : Rs.1500/-</p>
	   <p align="right">Quantity :
	   <select name="qnty"> 
	   <option>1</option><option>2</option>
	   <option>3</option><option>4</option><option>5</option>
	   </select>
	   <input type ="hidden" name = "id1" id = "id1" value ="1"/><br/><br/>
	   <input type="submit" name = "sub_btn" value="BUY"/>
	  </p>
    </div>
  </div>
</form> 

<form action = "payinst.php" method="GET">
 <div class="column classical">
    <div class="content">
    <img src="img/Tabla.jpg" alt="Tabla" width="120px" height="90px">
      <h4>Tabla</h4>
      <p align="right">Prize : Rs.1500/-</p>
	   <p align="right">Quantity :
	   <select name="qnty"> 
	   <option>1</option><option>2</option>
	   <option>3</option><option>4</option><option>5</option>
	   </select>
	   <input type ="hidden" name = "id1" id = "id1" value ="2"/><br/><br/>
	   <input type="submit" name = "sub_btn" value="BUY"/>
	  </p>
    </div>
  </div>
</form> 

<form action = "payinst.php" method="GET"> 
  <div class="column classical">
    <div class="content">
      <img src="img/flute.jpg" alt="Flute" width="120px" height="90px">
      <h4>Flute</h4>
      <p align="right">Prize : Rs.1500/-</p>
	  <p align="right">Quantity :
	   <select name="qnty"> 
	   <option>1</option><option>2</option>
	   <option>3</option><option>4</option><option>5</option>
	   </select>
	   <input type ="hidden" name = "id1" id = "id1" value ="3"/><br/><br/>
	   <input type="submit" name = "sub_btn" value="BUY"/>
	  </p>
    </div>
  </div>
</form>

<form action = "payinst.php" method="GET">  
  <div class="column classical">
    <div class="content">
    <img src="img/accordion.jpg" alt="Accordion" width="120px" height="90px">
      <h4>Accordion</h4>
      <p align="right">Prize : Rs.1500/-</p>
	   <p align="right">Quantity :
	   <select name="qnty"> 
	   <option>1</option><option>2</option>
	   <option>3</option><option>4</option><option>5</option>
	   </select>
	   <input type ="hidden" name = "id1" id = "id1" value ="4"/><br/><br/>
	   <input type="submit" name = "sub_btn" value="BUY"/>
	  </p>
    </div>
  </div>
</form>

<form action = "payinst.php" method="GET"> 
  <div class="column classical">
    
    <div class="content">
    <img src="img/tanpura.jpg" alt="Tanpura" width="120px" height="90px">
      <h4>Tanpura</h4>
      <p align="right">Prize : Rs.5000/-</p>
	  <p align="right">Quantity :
	   <select name="qnty"> 
	   <option>1</option><option>2</option>
	   <option>3</option><option>4</option><option>5</option>
	   </select>
	   <input type ="hidden" name = "id1" id = "id1" value ="5"/><br/><br/>
	   <input type="submit" name = "sub_btn" value="BUY"/>
	  </p>
    </div>
  </div>
</form>

<form action = "payinst.php" method="GET">  
  <div class="column western">
    <div class="content">
      <img src="img/drums.png" alt="Drums" width="120px" height="90px">
      <h4>Drums</h4>
      <p align="right">Prize : Rs.5500/-</p>
	  <p align="right">Quantity :
	   <select name="qnty"> 
	   <option>1</option><option>2</option>
	   <option>3</option><option>4</option><option>5</option>
	   </select>
	   <input type ="hidden" name = "id1" id = "id1" value ="6"/><br/><br/>
	   <input type="submit" name = "sub_btn" value="BUY"/>
	  </p>
    </div>
  </div>
</form>

<form action = "payinst.php" method="GET">
  <div class="column western">
    <div class="content">
    <img src="img/gretsch-drums.jpg" alt="Gretsch drums" width="120px" height="90px">
      <h4>Gretsch Drums</h4>
      <p align="right">Prize : Rs.5000/-</p>
	 <p align="right">Quantity :
	   <select name="qnty"> 
	   <option>1</option><option>2</option>
	   <option>3</option><option>4</option><option>5</option>
	   </select>
	   <input type ="hidden" name = "id1" id = "id1" value ="7"/><br/><br/>
	   <input type="submit" name = "sub_btn" value="BUY"/>
	  </p>
    </div>
  </div>
</form> 

<form action = "payinst.php" method="GET"> 
  <div class="column western">
    <div class="content">
      <img src="img/guitar.jpg" alt="Guitar" width="120px" height="90px">
      <h4>Guitar</h4>
      <p align="right">Prize : Rs.5500/-</p>
	   <p align="right">Quantity :
	   <select name="qnty"> 
	   <option>1</option><option>2</option>
	   <option>3</option><option>4</option><option>5</option>
	   </select>
	   <input type ="hidden" name = "id1" id = "id1" value ="8"/><br/><br/>
	   <input type="submit" name = "sub_btn" value="BUY"/>
	  </p>
    </div>
  </div>
</form>

<form action = "payinst.php" method="GET"> 
  <div class="column western">
    <div class="content">
      <img src="img/piano1.jpeg" alt="Piano" width="120px" height="90px">
      <h4>Piano</h4>
      <p align="right">Prize : Rs.5000/-</p>
	   <p align="right">Quantity :
	   <select name="qnty"> 
	   <option>1</option><option>2</option>
	   <option>3</option><option>4</option><option>5</option>
	   </select>
	   <input type ="hidden" name = "id1" id = "id1" value ="9"/><br/><br/>
	   <input type="submit" name = "sub_btn" value="BUY"/>
	  </p>
    </div>
  </div>
</form>

<form action = "payinst.php" method="GET">  
  <div class="column western">
    <div class="content">
      <img src="img/trumpet.jpg" alt="Trumpet" width="120px" height="90px">
      <h4>Trumpet</h4>
      <p align="right">Prize : Rs.5500/-</p>
	  <p align="right">Quantity :
	   <select name="qnty"> 
	   <option>1</option><option>2</option>
	   <option>3</option><option>4</option><option>5</option>
	   </select>
	   <input type ="hidden" name = "id1" id = "id1" value ="10"/><br/><br/>
	   <input type="submit" name = "sub_btn" value="BUY"/>
	  </p>
    </div>
  </div>
</form>

<form action = "payinst.php" method="GET">  
  <div class="column western">
    <div class="content">
    <img src="img/violine.jpg" alt="Violin" width="120px" height="90px">
      <h4>Violin</h4>
      <p align="right">Prize : Rs.5500/-</p>
	   <p align="right">Quantity :
	   <select name="qnty"> 
	   <option>1</option><option>2</option>
	   <option>3</option><option>4</option><option>5</option>
	   </select>
	   <input type ="hidden" name = "id1" id = "id1" value ="11"/><br/><br/>
	   <input type="submit" name = "sub_btn" value="BUY"/>
	  </p>
    </div>
  </div>
</form>  


<form action = "payinst.php" method="GET">
  <div class="column #below 5500">
    <div class="content">
      <img src="img/harmonyum.jpg" alt="Hamronyum" width="120px" height="90px">
      <h4>Harmonyum</h4>
	   <p align="right">Prize : Rs.1500/-</p>
	   <p align="right">Quantity :
	   <select name="qnty"> 
	   <option>1</option><option>2</option>
	   <option>3</option><option>4</option><option>5</option>
	   </select>
	   <input type ="hidden" name = "id1" id = "id1" value ="1"/><br/><br/>
	   <input type="submit" name = "sub_btn" value="BUY"/>
	  </p>
    </div>
  </div>
</form> 

<form action = "payinst.php" method="GET">
 <div class="column #below 5500">
    <div class="content">
    <img src="img/Tabla.jpg" alt="Tabla" width="120px" height="90px">
      <h4>Tabla</h4>
      <p align="right">Prize : Rs.1500/-</p>
	   <p align="right">Quantity :
	   <select name="qnty"> 
	   <option>1</option><option>2</option>
	   <option>3</option><option>4</option><option>5</option>
	   </select>
	   <input type ="hidden" name = "id1" id = "id1" value ="2"/><br/><br/>
	   <input type="submit" name = "sub_btn" value="BUY"/>
	  </p>
    </div>
  </div>
</form> 

<form action = "payinst.php" method="GET"> 
  <div class="column #below 5500">
    <div class="content">
      <img src="img/flute.jpg" alt="Flute" width="120px" height="90px">
      <h4>Flute</h4>
      <p align="right">Prize : Rs.1500/-</p>
	  <p align="right">Quantity :
	   <select name="qnty"> 
	   <option>1</option><option>2</option>
	   <option>3</option><option>4</option><option>5</option>
	   </select>
	   <input type ="hidden" name = "id1" id = "id1" value ="3"/><br/><br/>
	   <input type="submit" name = "sub_btn" value="BUY"/>
	  </p>
    </div>
  </div>
</form>

<form action = "payinst.php" method="GET">  
  <div class="column #below 5500">
    <div class="content">
    <img src="img/accordion.jpg" alt="Accordion" width="120px" height="90px">
      <h4>Accordion</h4>
      <p align="right">Prize : Rs.1500/-</p>
	   <p align="right">Quantity :
	   <select name="qnty"> 
	   <option>1</option><option>2</option>
	   <option>3</option><option>4</option><option>5</option>
	   </select>
	   <input type ="hidden" name = "id1" id = "id1" value ="4"/><br/><br/>
	   <input type="submit" name = "sub_btn" value="BUY"/>
	  </p>
    </div>
  </div>
</form>

<form action = "payinst.php" method="GET"> 
  <div class="column #below 5500">
    
    <div class="content">
    <img src="img/tanpura.jpg" alt="Tanpura" width="120px" height="90px">
      <h4>Tanpura</h4>
      <p align="right">Prize : Rs.5000/-</p>
	  <p align="right">Quantity :
	   <select name="qnty"> 
	   <option>1</option><option>2</option>
	   <option>3</option><option>4</option><option>5</option>
	   </select>
	   <input type ="hidden" name = "id1" id = "id1" value ="5"/><br/><br/>
	   <input type="submit" name = "sub_btn" value="BUY"/>
	  </p>
    </div>
  </div>
</form>

<form action = "payinst.php" method="GET">  
  <div class="column #below 5500">
    <div class="content">
      <img src="img/drums.png" alt="Drums" width="120px" height="90px">
      <h4>Drums</h4>
      <p align="right">Prize : Rs.5500/-</p>
	  <p align="right">Quantity :
	   <select name="qnty"> 
	   <option>1</option><option>2</option>
	   <option>3</option><option>4</option><option>5</option>
	   </select>
	   <input type ="hidden" name = "id1" id = "id1" value ="6"/><br/><br/>
	   <input type="submit" name = "sub_btn" value="BUY"/>
	  </p>
    </div>
  </div>
</form>

<form action = "payinst.php" method="GET">
  <div class="column #below 5500">
    <div class="content">
    <img src="img/gretsch-drums.jpg" alt="Gretsch drums" width="120px" height="90px">
      <h4>Gretsch Drums</h4>
      <p align="right">Prize : Rs.5000/-</p>
	 <p align="right">Quantity :
	   <select name="qnty"> 
	   <option>1</option><option>2</option>
	   <option>3</option><option>4</option><option>5</option>
	   </select>
	   <input type ="hidden" name = "id1" id = "id1" value ="7"/><br/><br/>
	   <input type="submit" name = "sub_btn" value="BUY"/>
	  </p>
    </div>
  </div>
</form> 

<form action = "payinst.php" method="GET"> 
  <div class="column #below 5500">
    <div class="content">
      <img src="img/guitar.jpg" alt="Guitar" width="120px" height="90px">
      <h4>Guitar</h4>
      <p align="right">Prize : Rs.5500/-</p>
	   <p align="right">Quantity :
	   <select name="qnty"> 
	   <option>1</option><option>2</option>
	   <option>3</option><option>4</option><option>5</option>
	   </select>
	   <input type ="hidden" name = "id1" id = "id1" value ="8"/><br/><br/>
	   <input type="submit" name = "sub_btn" value="BUY"/>
	  </p>
    </div>
  </div>
</form>

<form action = "payinst.php" method="GET"> 
  <div class="column #below 5500">
    <div class="content">
      <img src="img/piano1.jpeg" alt="Piano" width="120px" height="90px">
      <h4>Piano</h4>
      <p align="right">Prize : Rs.5000/-</p>
	   <p align="right">Quantity :
	   <select name="qnty"> 
	   <option>1</option><option>2</option>
	   <option>3</option><option>4</option><option>5</option>
	   </select>
	   <input type ="hidden" name = "id1" id = "id1" value ="9"/><br/><br/>
	   <input type="submit" name = "sub_btn" value="BUY"/>
	  </p>
    </div>
  </div>
</form>

<form action = "payinst.php" method="GET">  
  <div class="column #below 5500">
    <div class="content">
      <img src="img/trumpet.jpg" alt="Trumpet" width="120px" height="90px">
      <h4>Trumpet</h4>
      <p align="right">Prize : Rs.5500/-</p>
	  <p align="right">Quantity :
	   <select name="qnty"> 
	   <option>1</option><option>2</option>
	   <option>3</option><option>4</option><option>5</option>
	   </select>
	   <input type ="hidden" name = "id1" id = "id1" value ="10"/><br/><br/>
	   <input type="submit" name = "sub_btn" value="BUY"/>
	  </p>
    </div>
  </div>
</form>

<form action = "payinst.php" method="GET">  
  <div class="column #below 5500">
    <div class="content">
    <img src="img/violine.jpg" alt="Violin" width="120px" height="90px">
      <h4>Violin</h4>
      <p align="right">Prize : Rs.5500/-</p>
	   <p align="right">Quantity :
	   <select name="qnty"> 
	   <option>1</option><option>2</option>
	   <option>3</option><option>4</option><option>5</option>
	   </select>
	   <input type ="hidden" name = "id1" id = "id1" value ="11"/><br/><br/>
	   <input type="submit" name = "sub_btn" value="BUY"/>
	  </p>
    </div>
  </div>
</form>

<form action = "payinst.php" method="GET">
  <div class="column #below 5000">
    <div class="content">
      <img src="img/harmonyum.jpg" alt="Hamronyum" width="120px" height="90px">
      <h4>Harmonyum</h4>
	   <p align="right">Prize : Rs.1500/-</p>
	   <p align="right">Quantity :
	   <select name="qnty"> 
	   <option>1</option><option>2</option>
	   <option>3</option><option>4</option><option>5</option>
	   </select>
	   <input type ="hidden" name = "id1" id = "id1" value ="1"/><br/><br/>
	   <input type="submit" name = "sub_btn" value="BUY"/>
	  </p>
    </div>
  </div>
</form> 

<form action = "payinst.php" method="GET">
 <div class="column #below 5000">
    <div class="content">
    <img src="img/Tabla.jpg" alt="Tabla" width="120px" height="90px">
      <h4>Tabla</h4>
      <p align="right">Prize : Rs.1500/-</p>
	   <p align="right">Quantity :
	   <select name="qnty"> 
	   <option>1</option><option>2</option>
	   <option>3</option><option>4</option><option>5</option>
	   </select>
	   <input type ="hidden" name = "id1" id = "id1" value ="2"/><br/><br/>
	   <input type="submit" name = "sub_btn" value="BUY"/>
	  </p>
    </div>
  </div>
</form> 

<form action = "payinst.php" method="GET"> 
  <div class="column #below 5000">
    <div class="content">
      <img src="img/flute.jpg" alt="Flute" width="120px" height="90px">
      <h4>Flute</h4>
      <p align="right">Prize : Rs.1500/-</p>
	  <p align="right">Quantity :
	   <select name="qnty"> 
	   <option>1</option><option>2</option>
	   <option>3</option><option>4</option><option>5</option>
	   </select>
	   <input type ="hidden" name = "id1" id = "id1" value ="3"/><br/><br/>
	   <input type="submit" name = "sub_btn" value="BUY"/>
	  </p>
    </div>
  </div>
</form>

<form action = "payinst.php" method="GET">  
  <div class="column #below 5000">
    <div class="content">
    <img src="img/accordion.jpg" alt="Accordion" width="120px" height="90px">
      <h4>Accordion</h4>
      <p align="right">Prize : Rs.1500/-</p>
	   <p align="right">Quantity :
	   <select name="qnty"> 
	   <option>1</option><option>2</option>
	   <option>3</option><option>4</option><option>5</option>
	   </select>
	   <input type ="hidden" name = "id1" id = "id1" value ="4"/><br/><br/>
	   <input type="submit" name = "sub_btn" value="BUY"/>
	  </p>
    </div>
  </div>
</form>

<form action = "payinst.php" method="GET"> 
  <div class="column #below 5000">
    
    <div class="content">
    <img src="img/tanpura.jpg" alt="Tanpura" width="120px" height="90px">
      <h4>Tanpura</h4>
      <p align="right">Prize : Rs.5000/-</p>
	  <p align="right">Quantity :
	   <select name="qnty"> 
	   <option>1</option><option>2</option>
	   <option>3</option><option>4</option><option>5</option>
	   </select>
	   <input type ="hidden" name = "id1" id = "id1" value ="5"/><br/><br/>
	   <input type="submit" name = "sub_btn" value="BUY"/>
	  </p>
    </div>
  </div>
</form>  

<form action = "payinst.php" method="GET">
 <div class="column #below 2000">
    <div class="content">
    <img src="img/Tabla.jpg" alt="Tabla" width="120px" height="90px">
      <h4>Tabla</h4>
      <p align="right">Prize : Rs.1500/-</p>
	   <p align="right">Quantity :
	   <select name="qnty"> 
	   <option>1</option><option>2</option>
	   <option>3</option><option>4</option><option>5</option>
	   </select>
	   <input type ="hidden" name = "id1" id = "id1" value ="2"/><br/><br/>
	   <input type="submit" name = "sub_btn" value="BUY"/>
	  </p>
    </div>
  </div>
</form> 

<form action = "payinst.php" method="GET"> 
  <div class="column #below 2000">
    <div class="content">
      <img src="img/flute.jpg" alt="Flute" width="120px" height="90px">
      <h4>Flute</h4>
      <p align="right">Prize : Rs.1500/-</p>
	  <p align="right">Quantity :
	   <select name="qnty"> 
	   <option>1</option><option>2</option>
	   <option>3</option><option>4</option><option>5</option>
	   </select>
	   <input type ="hidden" name = "id1" id = "id1" value ="3"/><br/><br/>
	   <input type="submit" name = "sub_btn" value="BUY"/>
	  </p>
    </div>
  </div>
</form>

<form action = "payinst.php" method="GET">  
  <div class="column #below 2000">
    <div class="content">
    <img src="img/accordion.jpg" alt="Accordion" width="120px" height="90px">
      <h4>Accordion</h4>
      <p align="right">Prize : Rs.1500/-</p>
	   <p align="right">Quantity :
	   <select name="qnty"> 
	   <option>1</option><option>2</option>
	   <option>3</option><option>4</option><option>5</option>
	   </select>
	   <input type ="hidden" name = "id1" id = "id1" value ="4"/><br/><br/>
	   <input type="submit" name = "sub_btn" value="BUY"/>
	  </p>
    </div>
  </div>
</form>  
<!-- END GRID -->
</div>

  
 <!--Gallery Grid --> 

<div class="row">
<form action="payalb.php" method="GET">
  <div class="column album">
    <div class="content">
      <img src="img/arijit.jpg" alt="Arijit Singh" width="120px" height="90px">
      <h4>The Epic Cool</h4>
      <h4>Singer : Arigit Singh</h4>
	  <h4>Title : Raeese</h4>
	  <p align="right">Prize : Rs.500/-</p>
	  <p align="right">Quantity :
	   <select name="qnty"> 
	   <option>1</option><option>2</option>
	   <option>3</option><option>4</option><option>5</option>
	   </select>
	   <input type ="hidden" name = "i" id = "i" value ="1"/><br/><br/>
	   <input type="submit" name = "sub_btn" value="BUY"/>
	  </p>
    </div>
  </div>
</form>

<form action="payalb.php" method="GET">
<div class="column album">
    <div class="content">
      <img src="img/alka.jpg" alt="Alka" width="120px" height="90px">
      <h4>Alka Tunes</h4>
	  <h4>Singer : Alka Yagnik</h4>
	  <h4>Title : Tamasha</h4>
	  <p align="right">Prize : 150/-</p>
	  <p align="right">Quantity :
	   <select name="qnty"> 
	   <option>1</option><option>2</option>
	   <option>3</option><option>4</option><option>5</option>
	   </select>
	   <input type ="hidden" name = "i" id = "i" value ="2"/><br/><br/>
	   <input type="submit" name = "sub_btn" value="BUY"/>
	  </p>
    </div>
  </div>
</form>

<form action="payalb.php" method="GET">  
  <div class="column album">
    <div class="content">
      <img src="img/arman.jpg" alt="Arman Malik" width="120px" height="90px">
      <h4>Romantic Songs</h4>
	  <h4>Singer : Arman Malik</h4>
	   <h4>Title : MS Dhoni</h4>
	  <p align="right">Prize : 450/-</p>
	  <p align="right">Quantity :
	   <select name="qnty"> 
	   <option>1</option><option>2</option>
	   <option>3</option><option>4</option><option>5</option>
	   </select>
	   <input type ="hidden" name = "i" id = "i" value ="3"/><br/><br/>
	   <input type="submit" name = "sub_btn" value="BUY"/>
	  </p>
    </div>
  </div>
</form>

<form action="payalb.php" method="GET">  
  <div class="column album">
    <div class="content">
    <img src="img/shaan.jpg" alt="Shaan" width="120px" height="90px">
      <h4>Shaan Hits</h4>
	  <h4>Singer : Shaan </h4>
	   <h4>Title : Fanaa</h4>
	  <p align="right">Prize : 200/-</p>
	  <p align="right">Quantity :
	   <select name="qnty"> 
	   <option>1</option><option>2</option>
	   <option>3</option><option>4</option><option>5</option>
	   </select>
	   <input type ="hidden" name = "i" id = "i" value ="4"/><br/><br/>
	   <input type="submit" name = "sub_btn" value="BUY"/>
	  </p>
    </div>
  </div>
</form>

<form action="payalb.php" method="GET">  
  <div class="column album">
    <div class="content">
    <img src="img/shreya.jpg" alt="Shreya Ghoshal" width="120px" height="90px">
      <h4>Melody Songs</h4>
	  <h4>Singer : Shreya Ghoshal</h4>
	   <h4>Title : Bajirao Mastani</h4>
	  <p align="right">Prize : 550/-</p>
	  <p align="right">Quantity :
	   <select name="qnty"> 
	   <option>1</option><option>2</option>
	   <option>3</option><option>4</option><option>5</option>
	   </select>
	   <input type ="hidden" name = "i" id = "i" value ="5"/><br/><br/>
	   <input type="submit" name = "sub_btn" value="BUY"/>
	  </p>
    </div>
  </div>
</form>

<form action="payalb.php" method="GET">  
  <div class="column album">
    <div class="content">
    <img src="img/sonu.jpg" alt="Sonu Nigam" width="120px" height="90px">
      <h4>Sonu Rocks</h4>
	  <h4>Singer : Sonu Nigam</h4>
	   <h4>Title : 3 Idiots</h4>
	  <p align="right">Prize : 500/-</p>
	  <p align="right">Quantity :
	   <select name="qnty"> 
	   <option>1</option><option>2</option>
	   <option>3</option><option>4</option><option>5</option>
	   </select>
	   <input type ="hidden" name = "i" id = "i" value ="6"/><br/><br/>
	   <input type="submit" name = "sub_btn" value="BUY"/>
	  </p>
    </div>
  </div>
</form>  


<form action="payalb.php" method="GET">
  <div class="column #below 600">
    <div class="content">
      <img src="img/arijit.jpg" alt="Arijit Singh" width="120px" height="90px">
      <h4>The Epic Cool</h4>
      <h4>Singer : Arigit Singh</h4>
	  <h4>Title : Raeese</h4>
	  <p align="right">Prize : Rs.500/-</p>
	  <p align="right">Quantity :
	   <select name="qnty"> 
	   <option>1</option><option>2</option>
	   <option>3</option><option>4</option><option>5</option>
	   </select>
	   <input type ="hidden" name = "i" id = "i" value ="1"/><br/><br/>
	   <input type="submit" name = "sub_btn" value="BUY"/>
	  </p>
    </div>
  </div>
</form>

<form action="payalb.php" method="GET">
<div class="column #below 600">
    <div class="content">
      <img src="img/alka.jpg" alt="Alka" width="120px" height="90px">
      <h4>Alka Tunes</h4>
	  <h4>Singer : Alka Yagnik</h4>
	  <h4>Title : Tamasha</h4>
	  <p align="right">Prize : 150/-</p>
	  <p align="right">Quantity :
	   <select name="qnty"> 
	   <option>1</option><option>2</option>
	   <option>3</option><option>4</option><option>5</option>
	   </select>
	   <input type ="hidden" name = "i" id = "i" value ="2"/><br/><br/>
	   <input type="submit" name = "sub_btn" value="BUY"/>
	  </p>
    </div>
  </div>
</form>

<form action="payalb.php" method="GET">  
  <div class="column #below 600">
    <div class="content">
      <img src="img/arman.jpg" alt="Arman Malik" width="120px" height="90px">
      <h4>Romantic Songs</h4>
	  <h4>Singer : Arman Malik</h4>
	   <h4>Title : MS Dhoni</h4>
	  <p align="right">Prize : 450/-</p>
	  <p align="right">Quantity :
	   <select name="qnty"> 
	   <option>1</option><option>2</option>
	   <option>3</option><option>4</option><option>5</option>
	   </select>
	   <input type ="hidden" name = "i" id = "i" value ="3"/><br/><br/>
	   <input type="submit" name = "sub_btn" value="BUY"/>
	  </p>
    </div>
  </div>
</form>

<form action="payalb.php" method="GET">  
  <div class="column #below 600">
    <div class="content">
    <img src="img/shaan.jpg" alt="Shaan" width="120px" height="90px">
      <h4>Shaan Hits</h4>
	  <h4>Singer : Shaan </h4>
	   <h4>Title : Fanaa</h4>
	  <p align="right">Prize : 200/-</p>
	  <p align="right">Quantity :
	   <select name="qnty"> 
	   <option>1</option><option>2</option>
	   <option>3</option><option>4</option><option>5</option>
	   </select>
	   <input type ="hidden" name = "i" id = "i" value ="4"/><br/><br/>
	   <input type="submit" name = "sub_btn" value="BUY"/>
	  </p>
    </div>
  </div>
</form>

<form action="payalb.php" method="GET">  
  <div class="column #below 600">
    <div class="content">
    <img src="img/shreya.jpg" alt="Shreya Ghoshal" width="120px" height="90px">
      <h4>Melody Songs</h4>
	  <h4>Singer : Shreya Ghoshal</h4>
	   <h4>Title : Bajirao Mastani</h4>
	  <p align="right">Prize : 550/-</p>
	  <p align="right">Quantity :
	   <select name="qnty"> 
	   <option>1</option><option>2</option>
	   <option>3</option><option>4</option><option>5</option>
	   </select>
	   <input type ="hidden" name = "i" id = "i" value ="5"/><br/><br/>
	   <input type="submit" name = "sub_btn" value="BUY"/>
	  </p>
    </div>
  </div>
</form>

<form action="payalb.php" method="GET">  
  <div class="column #below 600">
    <div class="content">
    <img src="img/sonu.jpg" alt="Sonu Nigam" width="120px" height="90px">
      <h4>Sonu Rocks</h4>
	  <h4>Singer : Sonu Nigam</h4>
	   <h4>Title : 3 Idiots</h4>
	  <p align="right">Prize : 500/-</p>
	  <p align="right">Quantity :
	   <select name="qnty"> 
	   <option>1</option><option>2</option>
	   <option>3</option><option>4</option><option>5</option>
	   </select>
	   <input type ="hidden" name = "i" id = "i" value ="6"/><br/><br/>
	   <input type="submit" name = "sub_btn" value="BUY"/>
	  </p>
    </div>
  </div>
</form> 


<form action="payalb.php" method="GET">
<div class="column #below 250">
    <div class="content">
      <img src="img/alka.jpg" alt="Alka" width="120px" height="90px">
      <h4>Alka Tunes</h4>
	  <h4>Singer : Alka Yagnik</h4>
	  <h4>Title : Tamasha</h4>
	  <p align="right">Prize : 150/-</p>
	  <p align="right">Quantity :
	   <select name="qnty"> 
	   <option>1</option><option>2</option>
	   <option>3</option><option>4</option><option>5</option>
	   </select>
	   <input type ="hidden" name = "i" id = "i" value ="2"/><br/><br/>
	   <input type="submit" name = "sub_btn" value="BUY"/>
	  </p>
    </div>
  </div>
</form>

<form action="payalb.php" method="GET">  
  <div class="column #below 250">
    <div class="content">
    <img src="img/shaan.jpg" alt="Shaan" width="120px" height="90px">
      <h4>Shaan Hits</h4>
	  <h4>Singer : Shaan </h4>
	   <h4>Title : Fanaa</h4>
	  <p align="right">Prize : 200/-</p>
	  <p align="right">Quantity :
	   <select name="qnty"> 
	   <option>1</option><option>2</option>
	   <option>3</option><option>4</option><option>5</option>
	   </select>
	   <input type ="hidden" name = "i" id = "i" value ="4"/><br/><br/>
	   <input type="submit" name = "sub_btn" value="BUY"/>
	  </p>
    </div>
  </div>
</form>

<!-- END GRID -->
</div>

<!-- END MAIN -->
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

filterSelection("all")
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("column");
  if (c == "all") c = "";
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
  }
}

function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);     
    }
  }
  element.className = arr1.join(" ");
}
</script>

</body>
</html>