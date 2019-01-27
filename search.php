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

<!--- Body -->
	<br><br><br><br>
	<div class="w3-center">
`		<a href="criteria.html" class="w3-btn w3-blue"> Search </a>
	</div>
	
  	<br><br>
 	 <div class="w3-row-padding w3-center w3-section" style="padding: 30px 16px">

    		<div class="w3-col m3 l4">
      			<img src="./images/telecom.png" style="width:50%" onclick="onClick(this)" id ="telecom"class="w3-hover-opacity" alt="Telecommunication">
    		</div>

    		<div class="w3-col m3 l4">
      			<img src="./images/transport.png" style="width:50%" onclick="onClick(this)" id="transport" class="w3-hover-opacity" alt="Transport">
    		</div>

    		<div class="w3-col m3 l4">
      			<img src="./images/power.png" style="width:50%" onclick="onClick(this)" id = "power" class="w3-hover-opacity" alt="Power">
    		</div>

  	</div>

	<div class="w3-row-padding w3-center w3-section" style="padding: 30px 16px">

    		<div class="w3-col m3 l4">
      			<img src="./images/govern.png" style="width:50%" onclick="onClick(this)"  id="govern" class="w3-hover-opacity" alt="Government">
    		</div>

    		<div class="w3-col m3 l4">
      			<img src="./images/snpe.png" style="width:50%" onclick="onClick(this)" id="snpe" class="w3-hover-opacity" alt="SNPE">
    		</div>

    		<div class="w3-col m3 l4">
      			<img src="./images/bfsi.png" style="width:50%" onclick="onClick(this)" id="bfsi" class="w3-hover-opacity" alt="BFSI">
    		</div>

  	</div>
	
	<div id="modal01" class="w3-modal w3-black" onclick="this.style.display='none'">
  		<span class="w3-button w3-large w3-black w3-display-topright" title="Close Modal Image"><i class="fa fa-remove"></i></span>
  		<div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
    			<p id="caption" class="w3-opacity w3-large"></p>
  		</div>
	</div>

<script>
function onClick(element) {
  document.getElementById("modal01").style.display = "inline";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
  var x = element.id;
}
</script>



</body>
</html>


