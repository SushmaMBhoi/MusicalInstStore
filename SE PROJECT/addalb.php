<html>
<head><title></title></head>
<body>
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
		$Format = $_POST['format'];
		$Singer = $_POST['singer'];
		$Title = $_POST['title'];
		
		if(isset($_POST["submit"])){
		$check = getimagesize($_FILES['image']['tmp_name']);
		if($check !== false){
        $image = $_FILES['image']['tmp_name'];
        $imgContent = addslashes(file_get_contents($image));
				
		$result = mysqli_query($con, "SELECT * FROM ALBUM where title='$Name'");
		$num=mysqli_num_rows($result);
		if($num>0)
		{
			echo "Album Already Exist";
			header('Refresh:4;url=addalb.html');
		}
		else
		{
			$query1 = mysqli_query($con,"INSERT INTO ALBUM (title, format, cost, image) VALUES ('$Name','$Format', '$Price', '$imgContent')");
			if(!$query1)
			{
				die("Error on mysql query".mysqli_error($con));
			}
		
			else
			{
				//echo "Item inserted successfully :)";
				header('Refresh:4;url= manage.php');
			}
			 
			$query2 = mysqli_query($con, "Insert into SINGER (name) values ('$Singer')");
			if(!$query2)
			{
				die("Error on mysql query".mysqli_error($con));
			}
		
			else
			{
				//echo "Item inserted successfully :)";
				header('Refresh:4;url= manage.php');
			}
			 
			 $query3 = mysqli_query($con, "Insert into SONG (title, author) values ('$Title', '$Singer')");
			if(!$query3)
			{
				die("Error on mysql query".mysqli_error($con));
			}
		
			else
			{
				echo "Item inserted successfully :)";
				header('Refresh:4;url= manage.php');
			}
			
			
		}		
	
		mysqli_close($con);}}
	?>
</body>
</html>