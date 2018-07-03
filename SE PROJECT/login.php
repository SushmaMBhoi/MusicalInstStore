<?php
if(isset($_POST['submit']))
{
	session_start();//strt session_start
	$_SESSION['sess_username'] = $_POST['username'];//sess_username is session var name
}
?>

<?php
	$con = mysqli_connect('localhost', 'root', '');	
	if(!$con)
	{
		echo 'Not connected to server';
	}
	
	mysqli_select_db($con, 'MUSICANA');
	
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	$result = mysqli_query($con,"Select * from USER where email_id = '$username' and pswd = '$password'");
	$row = mysqli_fetch_array($result);
			
	if(!$row)
	{
		echo "Inavlid username/password";
		header('Refresh:3;url=login.html');
	}
	else
	{
		echo "Successfully logged in";
		header('Location:home.php');
	}
?>
