<?php
session_start();
include("config.php");
if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) 
{
  	if ( !mysqli_select_db( $conn, $mysqldb) ) 
	{
		return false;
	}

	$email = $_POST['email'];
	$password = $_POST['password'];
	$sql = "SELECT * FROM `user` WHERE `mail`= '$email' and `password` = '$password'";
	$result = mysqli_query( $conn, $sql);
	$row = mysqli_fetch_assoc($result);
	if( mysqli_num_rows( $result ) > 0) 
	{
		$_SESSION['login_user'] = $row["name"];
		echo '<script type="text/javascript">';
     		echo 'alert("success");';
		echo 'location.href="/cve/search.php"';
		echo '</script>';
	} 
	else 
	{
    		echo '<script type="text/javascript">';
    		echo 'alert("Username and/or Password incorrect");';
    		echo 'location.href="/cve/signin.html"';
    		echo '</script>';
	}
}
