<!DOCTYPE html>
<html>
<head>
	
	<title>Aktiviti</title>
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
		<center><h1>Borang Maklumat Aktiviti</h1></center>
		<p><?php include ("dropdown.php");?></p>
		<style>
			body {
				background-repeat: no-repeat;
    			background-position: right top;
    			margin-right: 200px;
    			background-attachment: 100px;
			}
		</style>
	</div>
	
<div class="container" id="main-content">
	<form method="post" action="<?php echo $_SERVER['PHP_SELF']?>">
	 <div align="center"><table width="200" border="1">
    <tr><th>ID</th><th>NAMA AKTIVITI</th></tr>
    <tr><td>001</td><td>QIAMULLAIL</td></tr>
    <tr><td>002</td><td>KURSUS </td></tr>
    <tr><td>003</td><td>MAJLIS</td></tr>
    <tr><td>004</td><td>CERAMAH</td></tr>
    <tr><td>005</td><td>GOTONG-ROYONG</td></tr>
    <tr><td>006</td><td>LAIN-LAIN</td></tr>
    </table></div><br/>
	
	ID:
  		<select name="id">  
			<option value="001" selected="selected" value="">001</br>
   	 		<option value="002 Setar" value="">002</br>
    		<option value="003" value="">003</br>
    		<option value="004" value="">004</br>  
    		<option value="005" value="">005</br> 
    		<option value="006" value="">006</br>
  		</select>
  		<br/>
					 
	Nama:
  		<input type="text" name="name" value=""></br>
  
 	Tarikh:
   		<input name="date" type="date" value=""/><br/>
	   
	Nama Tempat:
		<input type="text" name="place" value=""/><br/>
	
  	Alamat:<br/> 
  	Jalan:
    	<input type="text" name="street" value=""></br>
															 
	Bandar:
  		<select name="city">  
			<option value="Arau" selected="selected" value="">Arau</br>
   	 		<option value="Alor Setar" value="">Alor Setar</br>
    		<option value="Georgetown" value="">Georgetown</br>
    		<option value="Kuala Kangsar" value="">Kuala Kangsar</br>  
    		<option value="Shah Alam" value="">Shah Alam</br> 
    		<option value="Putrajaya" value="">Putrajaya</br>
  		</select>
  		<br/>
    
	Poskod: 
		<input type="text" name="postcode" value=""></br>
  
	Negeri:
    	<select name="state">  
      		<option value="Perlis" selected="selected" value="">Perlis</br>
      		<option value="Kedah" value="">Kedah</br>
      		<option value="Pulau Pinang" value="">Pulau Pinang</br>
      		<option value="Perak" value="">Perak</br>  
     		<option value="Selangor" value="">Selangor</br>  
      		<option value="Wilayah Persekutuan" value="">Wilayah Persekutuan</br>
   	 	</select>
		<br/><br/>
  
	<br/>
    <input type="submit" name="submit" value="Simpan">
	</form>
	
	<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$id = $_POST['id'];
		$name = $_POST['name'];
		$date = $_POST['date'];
		$place = $_POST['place'];
		$street = $_POST['street'];
		$city = $_POST['city'];
		$postcode = $_POST['postcode'];
 		$state = $_POST['state'];  
		
    	if (isset($_POST['id']))
        	$id = $_POST['id'];
		else
        	$id = "";
		
		if (isset($_POST['name']))
        	$name = $_POST['name'];
		else
        	$name = "";
		
		if (isset($_POST['datebirth']))
        	$datebirth = $_POST['datebirth'];
		else
        	$datebirth = "";
		
		if (isset($_POST['place']))
        	$place = $_POST['place'];
		else
        	$place = "";
		
		if (isset($_POST['street']))
        	$street = $_POST['street'];
		else
        	$street = "";
		
		if (isset($_POST['city']))
        	$city = $_POST['city'];
		else
        	$city = "";
		
		if (isset($_POST['postcode']))
        	$postcode = $_POST['postcode'];
		else
        	$postcode = "";
  		
		if (isset($_POST['state']))
        	$state = $_POST['state'];
		else
        	$state = "";
		
  	    $conn = mysqli_connect("127.0.0.1", "root", "", "wadah1") or die (mysql_error ());
        
    // SQL query
    $sql = "INSERT INTO activity (id, name, date, place, street, city, postcode, state) VALUES ('$id', '$name', '$date', '$place', '$street', '$city', '$postcode', '$state')";
        
    // Execute the query (the recordset $rs contains the result)
    if (mysqli_query($conn, $sql)) {
        echo "New record is created successfully";
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
