<?php
include("config.php");
$email = $_POST['email'];
$password = $_POST['password'];
$name = $_POST['name'];


if ( $conn )
{
      $sql = "INSERT INTO `user`(`name`, `mail` , `password`) VALUES ('$name','$email','$password')";
	if ( mysqli_query( $conn, $sql ) )
	{
        	echo '<script type="text/javascript">';
                echo 'alert("Registered Successfully\nPlease Login to continue");';
                echo 'location.href="index.php"';
                echo '</script>';
        }
        else
	{
          	echo '<script type="text/javascript">';
                echo 'alert("EmailId already exists");';
                echo 'location.href="register.html"';
               	echo '</script>';

  	}
}
?>
