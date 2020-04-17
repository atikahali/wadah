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
		<center><h1>Pendaftaran Maklumat Penyewa</h1></center>
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
No ahli Penyewa
<input type="text" name="noAhli" value=""></br>
Nama Penyewa
<input type="text" name="nama" value=""></br>
Alamat Penyewa
<input type="text" name="alamat" value=""></br>
No Telefon Penyewa
<input type="text" name="telefon" value=""></br>
Kategori Barang Sewaan
<input type="text" name="sewaan" value=""></br>
Nama Barangan
<input type="text" name="nama_barang" value=""></br>
Tarikh Sewaan
<input type="date" name="tarikh" value=""></br>
Kuantiti Sewaan
<input type="text" name="qty" value=""></br>
</br>
<input type="submit" name="registerrent" value=" OK "></br>
</form>
<?php
if (isset($_POST['registerrent'])){
    $noAhli = $_POST['noAhli'];
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$telefon = $_POST['telefon'];
	$sewaan = $_POST['sewaan'];
	$nama_barang = $_POST['nama_barang'];
	$tarikh= $_POST['tarikh'];
	$qty = $_POST['qty'];
	include 'dbconnect.php';
	// SQL query
	$sql = "INSERT INTO rental
				(noAhli, nama, alamat, telefon, sewaan, nama_barang, tarikh, qty)
				VALUES
				('$noAhli','$nama','$alamat','$telefon','$sewaan'
                ,'$nama_barang','$tarikh','$qty')";
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