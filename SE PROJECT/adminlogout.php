<?php
session_start();
echo $_SESSION['sess_username'];
if($_SESSION['sess_username'])
{
	unset($_SESSION['sess_username']);
	
	session_destroy();
	header('Refresh:0;url=adminlog.html');
}
?>