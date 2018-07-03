<?php

$con = mysqli_connect('localhost', 'root', '');

if(!$con)
	echo "Unable to connect";

$db = mysqli_select_db($con, 'MUSICANA');
	if(!$db)
		echo "Not able to connect";
	
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$email = $_POST['email_id'];
		$phone = $_POST['phno'];
		$pswd = $_POST['pswd'];
		
		$result = mysqli_query($con, "SELECT * FROM USER where email_id='$email'");
		$num=mysqli_num_rows($result);
		if($num>0)
		{
			echo "User Already Exist";
			header('Refresh:3;url=register.html');
		}
		else
		{
			$query = mysqli_query($con, "INSERT INTO USER (fname, lname, email_id, ph_no, pswd) VALUES ('$fname', '$lname', '$email', '$phone', '$pswd')");
			if(!$query)
			{
				die("Error on mysql query".mysqli_error($con));
			}
		
			else
			{
				echo "Registered Successfully....THANK YOU for registering!";
				header('Location: login.html');
			}
		}
		mysqli_close($con);
		
		
?>