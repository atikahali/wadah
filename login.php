<!DOCTYPE html>
<html>
<head>
	
	<title>Lecturer Login</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<style>
		#main-content {
		margin-top:20px;
		}
		.footer {
			font-size: 14px;
			text-align: center;
		}
	</style>
	
</head>
<body>

	<div class="jumbotron">
		<center><h1>Lecturer Login</h1></center>
		<style>
			body {
    			background-repeat: no-repeat;
    			background-position: right top;
    			margin-right: 200px;
    			background-attachment: fixed;
			}
		</style>
	</div>
	
<div class="container" id="main-content">
	<h2>Lecturer Login</h2>
	<?php 
	if (isset($_POST["login"])) {
		$servername = "localhost";
		$dbusername = "root";
		$dbpassword = "";
		$dbname = "comic";
		// Create connection
		$conn = mysqli_connect($servername, $dbusername, $dbpassword, $dbname) or die("Connection failed: " . mysqli_connect_error());;
 
		echo "<p>Welcome</p>";
		$username = $_POST["username"];
		$password = $_POST["password"];
    
		if ($conn) {
			$sql = "SELECT username, password, icNumber, phone, name
					FROM `admin`
					WHERE username = '$username' AND password = password('$password')";
			
			$result = mysqli_query($conn, $sql);
        	$row = mysqli_fetch_assoc($result);
			
        	//if ($username == 'admin" && $pwd == 'abc') {
        	if (mysqli_num_rows($result) == 1) {
            	include "home.php";
			} else {
				echo "login failed";
				include "loginform.php";
			} 
    	}
 	} else {
      	echo "Please enter your Username and Password";
			include "loginform.php";
 	}
	?>
	</div>
	
	<div class="footer">
		Nur Ainna Adilla &copy; <?php print date("Y");?>
	</div>

</body>
</html>