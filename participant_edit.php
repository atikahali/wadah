<!DOCTYPE html>
<html>
<head>
	
	<title>Ubah Peserta</title>
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
	
<div class="container" id="main-content">
	<h2>Ubah Maklumat Aktiviti</h2>
	<?php
	$servername = "localhost";
	$dbusername = "root";
	$dbpassword = "";
	$dbname = "wadah1";
	$id =  '';
	$name = '';
	$gender = '';
	$datebirth = '';
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
  		<input type="text" name="name" value="<?php print $name?>"></br>
  
 	Jantina:
		<input type="radio" name="gender" value="<?php print $gender?>">Lelaki
		<input type="radio" name="gender" value="<?php print $gender?>">Perempuan 
		</br>
  
 	Tarikh Lahir:
   		<input name="datebirth" type="date" value="<?php print $datebirth?>"><br/>
	   
	
  	Alamat:<br/> 
  	Jalan:
    	<input type="text" name="street" value="<?php print $street?>">
	 
	Poskod: 
		<input type="integer" name="postcode" value="<?php print $postcode?>"></br>														 
	Bandar:
  		<select name="city">  
			<option value="Arau" selected="selected" value="<?php print $city?>">Arau</br>
   	 		<option value="Alor Setar" value="<?php print $city?>">Alor Setar</br>
    		<option value="Georgetown" value="<?php print $city?>">Georgetown</br>
    		<option value="Kuala Kangsar" value="<?php print $city?>">Kuala Kangsar</br>  
    		<option value="Shah Alam" value="<?php print $city?>">Shah Alam</br> 
    		<option value="Putrajaya" value="<?php print $city?>">Putrajaya</br>
  		</select>
   
	Negeri:
    	<select name="state">  
      		<option value="Perlis" selected="selected" value="<?php print $state?>">Perlis</br>
      		<option value="Kedah" value="<?php print $state?>">Kedah</br>
      		<option value="Pulau Pinang" value="<?php print $state?>">Pulau Pinang</br>
      		<option value="Perak" value="<?php print $state?>">Perak</br>  
     		<option value="Selangor" value="<?php print $state?>">Selangor</br>  
      		<option value="Wilayah Persekutuan" value="<?php print $state?>">Wilayah Persekutuan</br>
   	 	</select>
		<br/>
  
		<br><input type="submit" name="edit" value="Ubah"></br>
	</form>

	<?php
	if (isset($_POST['edit'])){
		$id = $_POST['id'];
		$name = $_POST['name'];
		$gender = $_POST['gender'];
		$datebirth = $_POST['datebirth'];
		$street = $_POST['street'];
		$city = $_POST['city'];
		$postcode = $_POST['postcode'];
 		$state = $_POST['state'];   
		
		$conn = mysqli_connect("127.0.0.1", "root", "", "its572") or die (mysql_error ());
		
		// SQL query
    	$sql = "UPDATE participant SET name = '$name', gender = '$gender', datebirth = '$datebirth', street = '$street', city = '$city', postcode = '$postcode', state = '$state' WHERE id = '$id'";
 
		// Execute the query (the recordset $rs contains theresult)
    	if (mysqli_query($conn, $sql)) {
			echo "The record is edited successfully";
    	} else {
			echo "Error: " . $sql . "<br>" .mysqli_error($conn);
    	}
    	mysqli_close($conn);
	}	
	?>

	</br><a href="participant_view.php">Kembali ke Butiran Maklumat Aktiviti</a>
	</div>

	<div class="footer">
		Atikah Ali &copy; <?php print date("Y");?>
	</div>

</body>
</html>