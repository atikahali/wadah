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
		<center><h1>Butiran Maklumat Aktiviti</h1></center>
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
		$sql = "SELECT id, name, date, place, street, city, postcode, state FROM activity";
		$result = mysqli_query($conn, $sql);
		
		if (mysqli_num_rows($result) > 0) {
		echo "<table border = '1'>";
		echo "<tr><th>ID</th><th>Nama</th><th>Tarikh</th><th>Tempat</th><th>Jalan</th><th>Bandar</th><th>Poskod</th><th>Negeri</th><th>Ubah</th><th>Buang</th></tr>";
			while($row = mysqli_fetch_assoc($result))
			{
				echo "<tr><td>" . $row["id"]. "</td>";
				echo "<td>" . $row["name"] . "</td>";
				echo "<td>". $row["date"] . "</td>";
				echo "<td>". $row["place"] . "</td>";
				echo "<td>". $row["street"] . "</td>";
				echo "<td>". $row["city"] . "</td>";
				echo "<td>". $row["postcode"] . "</td>";
				echo "<td>".  $row["state"] . "</td></tr>";
				echo "<td><a href = 'activity_edit.php?id=" . $row["id"]."'>Ubah</a></td>";
				echo "<td><a href = 'activity_delete.php?id=" . $row["id"]."'>Buang</a></td>";
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