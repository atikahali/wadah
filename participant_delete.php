<!DOCTYPE html>
<html>
<head>
	
	<title>Buang Peserta</title>
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
	
<div class="container" id="main-content">
	<h2>Buang Peserta</h2>
	<?php
	$servername = "localhost";
	$dbusername = "root";
	$dbpassword = "";
	$dbname = "wadah1";
	$id = '';
	$name = '';
	$date = '';
	$place = '';
	$street = '';
	$city = '';
	$postcode = '';
 	$state = '';

	if (isset($_GET['id'])) {
  		$id = $_GET['id'];
   		
		// Create connection
  		$conn = mysqli_connect($servername, $dbusername, $dbpassword, $dbname);

		// Check connection
		if (!$conn) {
  			die("Connection failed: " .mysqli_connect_error());
		}
							   
		$sql = "SELECT id, name, gender, datebirth, street, city, postcode, state FROM participant WHERE id = '$id'";
		$result = mysqli_query($conn, $sql);
							   
		if (mysqli_num_rows($result) > 0) {
  			// output data of each row
  			$row = mysqli_fetch_assoc($result);
  			$id = $row['id'];
			$name = $row['name'];
			$gender = $row['gender'];
			$datebirth = $row['datebirth'];
			$street = $row['street'];
			$city = $row['city'];
			$postcode = $row['postcode'];
			$state = $row['state'];
  		} else {
			echo "0 results";
  		}
  		mysqli_close($conn);
	}
	?>

	<form method="post" action="<?php echo $_SERVER['PHP_SELF']?>?id=<?php print $id?>">	
	IC:
  		<input type="text" name="id" value="<?php print $id?>" disabled="disabled"></br>
					 
	Nama:
  		<input type="text" name="name" value="<?php print $name?>" disabled="disabled"></br>
	
	Jantina:
		<input type="radio" name="gender" value="<?php print $gender?>" disabled="disabled">Lelaki
		<input type="radio" name="gender" value="<?php print $gender?>" disabled="disabled">Perempuan 
		</br>
  
 	Tarikh Lahir:
   		<input name="date" type="date" value="<?php print $date?>" disabled="disabled"><br/>
	   
  	Alamat:<br/> 
  	Jalan:
    	<input type="text" name="street" value="<?php print $street?>" disabled="disabled"></br>
															 
	Bandar:
  		<select name="city">  
			<option value="Arau" selected="selected" value="<?php print $city?>" disabled="disabled">Arau</br>
   	 		<option value="Alor Setar" value="<?php print $city?>" disabled="disabled">Alor Setar</br>
    		<option value="Georgetown" value="<?php print $city?>" disabled="disabled">Georgetown</br>
    		<option value="Kuala Kangsar" value="<?php print $city?>" disabled="disabled">Kuala Kangsar</br>  
    		<option value="Shah Alam" value="<?php print $city?>" disabled="disabled">Shah Alam</br> 
    		<option value="Putrajaya" value="<?php print $city?>" disabled="disabled">Putrajaya</br>
  		</select>
  		<br/>
    
	Poskod: 
		<input type="text" name="postcode" value="<?php print $postcode?>" disabled="disabled"></br>
  
	Negeri:
    	<select name="state">  
      		<option value="Perlis" selected="selected" value="<?php print $state?>" disabled="disabled">Perlis</br>
      		<option value="Kedah" value="<?php print $state?>" disabled="disabled">Kedah</br>
      		<option value="Pulau Pinang" value="<?php print $state?>" disabled="disabled">Pulau Pinang</br>
      		<option value="Perak" value="<?php print $state?>" disabled="disabled">Perak</br>  
     		<option value="Selangor" value="<?php print $state?>" disabled="disabled">Selangor</br>  
      		<option value="Wilayah Persekutuan" value="<?php print $state?>" disabled="disabled">Wilayah Persekutuan</br>
   	 	</select>
		<br/><br/>
  
    <input type="hidden" name="id" value="<?php print $id?>">
		<input type="submit" name="Delete" value="Delete"></br>
	</form>

	<?php
	if (isset($_POST['Delete'])){
		$id = $_POST['id'];
		$conn = mysqli_connect("127.0.0.1", "root", "", "wadah1") or die (mysql_error ());
		
		// SQL query
		$sql = "DELETE FROM participant WHERE id = '$id'";
		
		// Execute the query (the recordset $rs contains the result)
		if (mysqli_query($conn, $sql)) {
			echo "The record is deleted successfully";
		} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		mysqli_close($conn);
	}
	?>
	</br><a href="participant_view.php">Kembali ke Butiran Maklumat Peserta</a>
	</div>

	<div class="footer">
		Atikah Ali &copy; <?php print date("Y");?>
	</div>

</body>
</html>
