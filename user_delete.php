<!DOCTYPE html>
<html>
<head>
	
	<title>Buang Maklumat Inventori</title>
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
		<center><h1>Buang Maklumat Inventori</h1></center>
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
$SiriNo = '';
$Barang = '';
$name = '';
$quantity = '';
$Inventori = '';
$Pembekal = '';
$seliaan = '';
if (isset($_GET['noSiri'])) {
    $SiriNo = $_GET['noSiri'];
	// Cre ate connection
	include 'dbconnect.php';
	
	$sql = "SELECT `noSiri`, `kategoriBarang`, `nama`, `qty`, `inventori`, `pembekalBarang`,`pembekal`, `seliaan` FROM `inventori` WHERE 1";
	$result = mysqli_query($conn, $sql);
	
	if (mysqli_num_rows($result) > 0) {
		// output data of each row
		$row = mysqli_fetch_assoc($result);
		$SiriNo = $row['noSiri'];
		$Barang = $row['kategoriBarang'];
		$name = $row['nama'];
		$quantity = $row['qty'];
		$Inventori = $row['inventori'];
		$pembekalBarang = $row['pembekalBarang'];
		$Pembekal = $row['pembekal'];
		$seliaan = $row['seliaan'];
		
	} else {
		echo "0 results";
	}

	mysqli_close($conn);
}
?>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']?>?noSiri=<?php print $SiriNo?>">
No Siri Barang
<input type="text" name="noSiri" value="<?php echo $SiriNo?>" disabled="disabled"></br>
Kategori Barang
<input type="text" name="kategoriBarang" value="<?php echo $Barang?>"></br>
Nama Barang
<input type="text" name="nama" value="<?php echo $name?>"></br>
Jumlah Barang
<input type="text" name="qty" value="<?php echo $quantity?>"></br>
Tarikh Inventori
<input type="date" name="inventori" value="<?php echo $Inventori?>"></br>

 Pembekal Barangan
	<input type="text" name="pembekalBarang" value="<?php echo $pembekalBarang?>"></br>

Penyenggara
<input type="text" name="pembekal" value="<?php echo $Pembekal?>"></br>
Tarikh Selenggara
<input type="date" name="seliaan" value="<?php echo $seliaan?>"></br>
</br>
<input type="hidden" name="noSiri" value="<?php echo $SiriNo?>">
<input type="submit" name="DeleteUser" value=" OK "></br>
</form>
<?php
if (isset($_POST['DeleteUser'])){
	$SiriNo = $_POST['noSiri'];


	include 'dbconnect.php';
	// SQL query
	$sql = "DELETE FROM inventori
				WHERE noSiri = '$SiriNo'";

	// Execute the query (the recordset $rs contains the result)
	if (mysqli_query($conn, $sql)) {
		echo "The record is deleted successfully";
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
	
	mysqli_close($conn);
}
?>
</br><a href="detailInventori.php">Back</
</body>
</html>