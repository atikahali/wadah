<!DOCTYPE html>
<html>
<head>
	
	<title>Buang Maklumat Penyewa</title>
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
		<center><h1>Buang Maklumat Penyewa</h1></center>
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
$servername = "localhost";
	$dbusername = "root";
	$dbpassword = "";
	$dbname = "wadah1";
$noAhli = '';
$nama = '';
$alamat = '';
$telefon = '';
$sewaan = '';
$nama_barang = '';
$tarikh = '';
$qty = '';
if (isset($_GET['noAhli'])) {
    $noAhli = $_GET['noAhli'];
	// Create connection
  		$conn = mysqli_connect($servername, $dbusername, $dbpassword, $dbname);

		// Check connection
		if (!$conn) {
  			die("Connection failed: " .mysqli_connect_error());
		}
	$sql = "SELECT `noAhli`, `nama`, `alamat`, `telefon`, `sewaan`, `nama_barang`, `tarikh`, `qty` FROM `rental` WHERE 1";
	$result = mysqli_query($conn, $sql);
	
	if (mysqli_num_rows($result) > 0) {
		// output data of each row
		$row = mysqli_fetch_assoc($result);
		$noAhli = $row['noAhli'];
		$nama = $row['nama'];
		$alamat = $row['alamat'];
		$telefon = $row['telefon'];
		$sewaan = $row['sewaan'];
		$nama_barang = $row['nama_barang'];
		$tarikh = $row['tarikh'];
		$qty = $row['qty'];
		
	} else {
		echo "0 results";
	}
	
	mysqli_close($conn);
}
?>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']?>?noAhli=<?php print $noAhli?>">
No ahli penyewa
<input type="text" name="noAhli" value="<?php echo $noAhli?>" disabled="disabled"></br>
Nama penyewa
<input type="text" name="nama" value="<?php echo $nama?>"></br>
Alamat Penyewa
<input type="text" name="alamat" value="<?php echo $alamat?>"></br>
No telefon Penyewa
<input type="text" name="telefon" value="<?php echo $telefon?>"></br>
Kategori Barang Sewaan
<input type="date" name="sewaan" value="<?php echo $sewaan?>"></br>
Nama barangan
<input type="text" name="nama_barang" value="<?php echo $nama_barang?>"></br>
Tarikh Sewaan
<input type="date" name="tarikh" value="<?php echo $tarikh?>"></br>
Kuantiti sewaan
<input type="date" name="qty" value="<?php echo $qty?>"></br>
</br>
<input type="hidden" name="noAhli" value="<?php echo $noAhli?>">
<input type="submit" name="DeleteUser" value=" OK "></br>
</form>
<?php
if (isset($_POST['DeleteUser'])){
	$noAhli = $_POST['noAhli'];

include 'dbconnect.php';
	// SQL query
	$sql = "DELETE FROM rental
				WHERE noAhli = '$noAhli'";

	// Execute the query (the recordset $rs contains the result)
	if (mysqli_query($conn, $sql)) {
		echo "The record is deleted successfully";
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
	
	mysqli_close($conn);
}
?>
</br><a href="detailRental.php">Back</
</body>
</html>