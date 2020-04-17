<!DOCTYPE html>
<html>
<head>
	
	<title>Home</title>
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
		<center><h1>Pendaftaran Maklumat Aset</h1></center>
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
	<form method="post" action="">
	No Siri Barang
	<input type="text" name="noSiri" value=""></br>
		
	Kategori Barang
	<input type="text" name="kategoriBarang" value=""></br>

	Nama Barang
	<input type="text" name="nama" value=""></br>

	Jumlah Barang
	<input type="text" name="qty" value=""></br>
	
	Tarikh Inventori
	<input type="date" name="inventori" value=""></br>
    
    Pembekal Barangan
	<input type="text" name="pembekalBarang" value=""></br>

	Penyenggara
	<input type="text" name="pembekal" value=""></br>

	Tarikh Selenggara
	<input type="date" name="seliaan" value=""></br>
    
   
	</br>
	<input type="submit" name="AddUser" value=" OK "></br>
	</form>
<?php
if (isset($_POST['AddUser'])){
	$SiriNo = $_POST['noSiri'];
	$Barang = $_POST['kategoriBarang'];
	$name = $_POST['nama'];
	$quantity = $_POST['qty'];
	$Inventori = $_POST['inventori'];
	$pembekalBarang = $_POST['pembekalBarang'];
	$Pembekal = $_POST['pembekal'];
	$seliaan = $_POST['seliaan'];
	include 'dbconnect.php';
	// SQL query
	$sql = "INSERT INTO inventori 
				(noSiri, kategoriBarang, nama, qty, inventori, pembekalBarang, pembekal, seliaan)
				VALUES
				('$SiriNo','$Barang','$name','$quantity','$Inventori', '$pembekalBarang','$Pembekal','$seliaan')";
	// Execute the query (the recordset $rs contains the result)
	if (mysqli_query($conn, $sql)) {
		echo "New record created successfully";
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
	mysqli_close($conn);
}
?>
</div>
</body>
</html>