<?php
session_start();
echo $_SESSION['sess_username'];
if($_SESSION['sess_username'])
{
	unset($_SESSION['sess_username']);
	header('Refresh:0;url=login.html');
	session_destroy();
	
}
?>