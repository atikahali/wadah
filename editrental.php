<!DOCTYPE html>
<html>
<head>
	
	<title>Ubah Maklumat Penyewa</title>
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
		<center><h1>Ubah Maklumat Penyewa</h1></center>
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

if (isset($_GET['noAhli'])) {
    $noAhli = $_GET['noAhli'];
    // Cre ate connection
    include 'dbconnect.php';
    
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
        $tarikh= $row['tarikh'];
        $qty = $row['qty'];

        
    } else {
        echo "0 results";
    }
    
    mysqli_close($conn);
}
?>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']?>?noAhli=<?php print $noAhli?>">

No ahli Penyewa
<input type="text" name="noAhli" value="<?php echo $noAhli?>" disabled="disabled"></br>
Nama Penyewa
<input type="text" name="nama" value="<?php echo $nama?>"></br>
Alamat Penyewa
<input type="text" name="alamat" value="<?php echo $alamat?>"></br>
No Telefon Penyewa
<input type="text" name="telefon" value="<?php echo $telefon?>"></br>
Kategori Barang Sewaan
<input type="text" name="sewaan"value="<?php echo $sewaan?>"></br>
Nama Barangan
<input type="text" name="nama_barang" value="<?php echo $nama_barang?>"></br>
Tarikh Sewaan
<input type="date" name="tarikh" value="<?php echo $tarikh?>"></br>
Kuantiti Sewaan
<input type="text" name="qty" value="<?php echo $qty?>"></br>
</br>
<input type="hidden" name="noAhli" value="<?php echo $noAhli?>">
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
	$sql = "UPDATE rental SET
				nama = '$nama', 
				alamat = '$alamat', 
				telefon = '$telefon',
                sewaan = '$sewaan',
                nama_barang = '$nama_barang',
                tarikh = '$tarikh',
                qty = '$qty'
				
                WHERE
				noAhli = '$noAhli'";

	// Execute the query (the recordset $rs contains the result)
	if (mysqli_query($conn, $sql)) {
		echo "The record is updated successfully";
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
	
	mysqli_close($conn);
}
?>
</br><a href="detailRental.php">Back</a>
