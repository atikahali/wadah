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
		<center><h1>Senarai Maklumat Penyewa</h1></center>
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
<style>
table {
	font-family: arial, sans-serif;
	border-collapse: collapse;
	width: 80%;
}

td, th {
	border: 1px solid #dddddd;
	text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
<?php
include 'dbconnect.php';
$sql = "SELECT * FROM `rental` WHERE 1";
$result = mysqli_query($conn, $sql);
?>

<form  method="GET" action="detailRental.php?go"  id="searchform"> 
<input  type="text" name="noAhli" value="No Ahli"> 
<input  type="submit" name="submit" value="Search"> 


</br><a href="registerRental.php">Tambah Maklumat Penyewa</a>
<table>
  <tr>
    <th>No Ahli Penyewa</th>
    <th>Nama Penyewa</th>
    <th>Alamat Penyewa</th>
    <th>No Telefon Penyewa</th>
    <th>Kategori Barang Sewaan</th>
    <th>Nama Barang Sewaan</th>
    <th>Tarikh Sewaan</th>
    <th>Kuantiti Sewaan</th>
    
    <th colspan="3"></th>
  </tr>
<?php 
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
?>	
    
    	<tr>
    	<td><?php echo $row["noAhli"] ?></td>
    	<td><?php echo $row["nama"] ?></td>
    	<td><?php echo $row["alamat"] ?></td>
    	<td><?php echo $row["telefon"] ?></td>
    	<td><?php echo $row["sewaan"] ?></td>
    	<td><?php echo $row["nama_barang"] ?></td>
    	<td><?php echo $row["tarikh"] ?></td>
    	<td><?php echo $row["qty"] ?></td>
    	
    	<td><a href = 'editrental.php?noAhli=" . $row["noAhli"]."'>Ubah</a></td>
    	<td><a href = 'deleterental.php?noAhli=" .$row["noAhli"]."'>Buang</a></td>
    	</tr>
<?php
    }
} else {
    echo "<tr><td colspan='3'>0 results</td></tr>";
}

mysqli_close($conn);
?>
</table>
</div>
</body>
</html>