<!DOCTYPE html>
<html>
<title>CVE REPORT</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
  	body {font-family: "Lato", sans-serif}
  	table, th, td 
  	{
            border: 1px solid black;
            text-align: center;

  	}
  </style>
  
<body>

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-black w3-padding-large">

    <div class="w3-right w3-large">

            	<?php
			include("config.php");
			session_start();
			if( isset($_SESSION["login_user"]) )
			{
				echo '<a href="logout.php" class="w3-bar-item w3-button">Logout</a>';
				
			}
			else
			{
				echo '<a href="signin.html" class="w3-bar-item w3-button">Sign in</a>';
				echo '<a href="register.html" class="w3-bar-item w3-button">Register</a>';
			}
		?>

    </div>
  </div>
</div>

<!---Body ---->

<div class="w3-container w3-center">

<?php

if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) 
{
  	if ( !mysqli_select_db( $conn, $mysqldb) ) 
	{
		return false;
	}

	$sname = $_POST['sname'];
	$oname = $_POST['oname'];
	$vname = $_POST['vname'];
	$pname = $_POST['pname'];
?>
	<br><br><br><br>
	<p1><b>SECTOR: </b><p1>
	<?php echo $sname; ?><br>
	<p2><b>Organization: </b><p2>
	<?php echo $oname; ?><br>
	<p3><b>VENDOR: </b><p3>
	<?php echo $vname; ?><br>
	<table class="w3-display-middle">
	<tbody>
            <tr>
                <th>Product</th>
                <th>Published</th>
                <th>CVE ID</th>
                <th>Vulnerability type</th>
		<th>CVSS</th>
                <th>Summary</th>
            </tr>

<?php
	$sql = "SELECT * from `product` where cveid = (SELECT cveid FROM `cve` WHERE `sname`= '$sname' and `oname` = '$oname' and `pname` = '$pname' and `vname` = '$vname')";
	$result = mysqli_query( $conn, $sql);
	while($row = mysqli_fetch_array($result))
		{
            		echo '<tr>';
			echo '<td> '.$row['pname'].' </td>';
			echo '<td> '.$row['pdate'].' </td>';
			echo '<td> '.$row['cveid'].' </td>';
			echo '<td> '.$row['vtype'].' </td>';
			echo '<td> '.$row['cvss'].' </td>';
			echo '<td> '.$row['summary'].' </td>';
            		echo '</tr>';
		}
         }
?>
        </tbody>
	</table>

</div>
</body>

</html>
