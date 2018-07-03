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
		
		$result1 = mysqli_query($con, "SELECT * FROM MUSICAL_INSTRUMENTS where name='$Name'");
		$row1=mysqli_fetch_row($result1);

		if(!$row1)
		{
			echo "".mysqli_error($con);
		}
		if(!$result1)
		{
			echo "error executing the query".mysqli_error($con);
		}

		$result2 = mysqli_query($con, "SELECT * FROM ALBUM where title='$Name'");
		$row2=mysqli_fetch_row($result2);

		if(!$row2)
		{
			echo "".mysqli_error($con);
		}
		if(!$result2)
		{
			echo "error executing the query".mysqli_error($con);
		}
		
		$Iname=$row1[1];
		$Aname=$row2[1];
		
		if($Iname='$Name')
		{
			$q1=mysqli_query($con, "DELETE FROM MUSICAL_INSTRUMENTS where name='$Name'");
			if($q1)
			{
				echo 'Instrument is removed successfully';
				header('Refresh:4;url= manage.php');
			}
			else
			{
				echo "error executing the query".mysqli_error($con);
			}
		}
		else if($Aname='$Name')
		{
			$q2=mysqli_query($con, "DELETE FROM ALBUM where title='$Name'");
			if($q2)
			{
				echo 'Album is removed successfully';
				header('Refresh:2;url= manage.php');
			}
			else
			{
				echo "error executing the query".mysqli_error($con);
			}
		}
		
	mysqli_close($con);
?>