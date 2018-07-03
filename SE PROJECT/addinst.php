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
	header('Location:adminlog.html');
}

$con = mysqli_connect('localhost', 'root', '');
if(!$con)
	echo "Unable to connect";
$db = mysqli_select_db($con, 'MUSICANA');
	if(!$db)
		echo "Not able to connect";
	
		$Name = $_POST['name'];
		$Price = $_POST['price'];
		
		
		if(isset($_POST["submit"])){
		$check = getimagesize($_FILES['image']['tmp_name']);
		if($check !== false){
        $image = $_FILES['image']['tmp_name'];
        $imgContent = addslashes(file_get_contents($image));
		
		//$dataTime = date("Y-m-d H:i:s");
		
		$result = mysqli_query($con, "SELECT * FROM MUSICAL_INSTRUMENTS where name='$Name'");
		$num=mysqli_num_rows($result);
		if($num>0)
		{
			echo "Instrument Already Exist";
			header('Refresh:4;url=addinst.html');
		}
		else
		{
			$query1 = mysqli_query($con,"INSERT INTO MUSICAL_INSTRUMENTS (name, cost, image) VALUES ('$Name', '$Price', '$imgContent')");
			//$query2 = mysqli_query($con, "INSERT into images (image, created) VALUES ('$imgContent', '$dataTime')");
			
			if(!$query1)
			{
				die("Error on mysql query".mysqli_error($con));
			}
		
			else
			{
				echo "Item inserted successfully :)";
				header('Refresh:2;url= manage.php');
			}
			 
		}		
	
		mysqli_close($con);}}
	?>