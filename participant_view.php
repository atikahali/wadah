<!DOCTYPE html>
<html>
<head>
	
	<title>Peserta</title>
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
		<center><h1>Butiran Maklumat Peserta</h1></center>
		<p><?php include ("dropdown.php");?></p>
		<style>
			body {
				background-repeat: no-repeat;
    			background-position: right top;
    			margin-right: 200px;
    			background-attachment: fixed;
			}
		</style>
	</div>
	
<?php
	//set database connection configuration
	$servername = "localhost";
	$dbusername = "root";
	$dbpassword = "";
	$dbname = "wadah1";

	// Create connection
	$conn = mysqli_connect($servername, $dbusername, $dbpassword, $dbname)
		or die("Connection failed: " . mysqli_connect_error());

	if ($conn)
	{
		$sql = "SELECT id, name, gender, datebirth, street, city, postcode, state, question1, question2, question3, question4, question5 FROM participant";
		$result = mysqli_query($conn, $sql);
		if (mysqli_num_rows($result) > 0) {
		echo "<table border = '1'>";
		echo "<tr><th>IC</th><th>Name</th><th>Gender</th><th>Date of Birth</th><th>Street</th><th>City</th><th>Postcode</th><th>State</th><th>Question 1</th><th>Question 2</th><th>Question 3</th><th>Question 4</th><th>Question 5</th></tr>";
			
			while($row = mysqli_fetch_assoc($result))
			{
				echo "<tr><td>" . $row["id"]. "</td>";
				echo "<td>" . $row["name"] . "</td>";
				echo "<td>". $row["gender"] . "</td>";
				echo "<td>". $row["datebirth"] . "</td>";
				echo "<td>". $row["street"] . "</td>";
				echo "<td>". $row["city"] . "</td>";
				echo "<td>". $row["postcode"] . "</td>";
				echo "<td>". $row["state"] . "</td>";
				echo "<td>". $row["question1"] . "</td>";
				echo "<td>". $row["question2"] . "</td>";
				echo "<td>". $row["question3"] . "</td>";
				echo "<td>". $row["question4"] . "</td>";
				echo "<td>". $row["question5"] . "</td></tr>";
				echo "<td><a href = 'participant_edit.php?id=" . $row["id"]."'>Ubah</a></td>";
				echo "<td><a href = 'participant_delete.php?id=" . $row["id"]."'>Buang</a></td>";
				echo "</tr>";
			}
				echo "</table>";
		} else {
		echo "no data found"; 
		}
	}
?>

	<div class="footer">
		Atikah Ali &copy; <?php print date("Y");?>
	</div>

</body>
</html>