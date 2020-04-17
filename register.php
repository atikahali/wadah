<!DOCTYPE html>
<html>
<head>
	
	<title>Login</title>
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
		<center><h1>Admin Registration Form</h1></center>
		<style>
			body {
    			background-image: url("13578b1b0959038_nobackground.jpg");
    			background-repeat: no-repeat;
    			background-position: right top;
    			margin-right: 200px;
    			background-attachment: fixed;
			}
		</style>
	</div>

<div class="container" id="main-content">
	<h2>Registeration Form</h2>
	<p>Please fill in all the details.</p>
	<form method="post" action="<?php echo $_SERVER['PHP_SELF']?>">
	Name:
		<input type="text" name="name" value=""></br>
	Date  of Birth:
		<input type="date" name="dob" value=""></br>
	Gender:
		<input type="radio" name="gender" value="Male"> Male
		<input type="radio" name="gender" value="Female"> Female </br>

	Username:
		<input type="text" name="username" value=""></br>
	Password:
		<input type="password" name="password" value=""></br>
	
	</br>
	<input type="submit" name="AddUser" value="Register"></br>
	</form>

	<?php
	if (isset($_POST['AddUser'])){
		$name = $_POST['name'];
		$dob = $_POST['dob'];
		$gender = $_POST['gender'];
		$username = $_POST['username'];
		$password = $_POST['password'];
    
		$conn = mysqli_connect("127.0.0.1", "root", "", "wadah1") or die (mysql_error ());
        
    	// SQL query
		$sql = "INSERT INTO admin (name, dob, gender, username, password) VALUES ('$name', '$dob', '$gender', '$username', PASSWORD('$password'))";
        
    	// Execute the query (the recordset $rs contains the result)
    	if (mysqli_query($conn, $sql)) {
			echo "Registeration success!";
		} else {
			echo "Error: " . $sql . "<br>" .mysqli_error($conn);
    	}
    	mysqli_close($conn);
	}
	?>
	</div>

	<div class="footer">
		Atikah Ali &copy; <?php print date("Y");?>
	</div>

</body>
</html>
