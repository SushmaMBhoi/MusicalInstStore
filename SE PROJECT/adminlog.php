<?php
if(isset($_POST['submit']))
{
	session_start();//strt session_start
	$_SESSION['sess_username'] = $_POST['username'];//sess_username is session var name
	
	$username = $_POST['username'];
	$password = $_POST['password'];	
	if($username=="admin@gmail.com" && $password=="Admin123")
	{
		header('Refresh:0;url=manage.php');
	}
	else
	{
		echo "Inavlid username/password";
		header('Refresh:3;url=adminlog.html');
	}
}
?>