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
		<center><h1>Senarai Maklumat Inventori</h1></center>
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
$sql = "SELECT `noSiri`, `kategoriBarang`, `nama`, `qty`, `inventori`, `pembekalBarang`,`pembekal`, `seliaan` FROM `inventori` WHERE 1";
$result = mysqli_query($conn, $sql);
?>

<form  method="post" action="detailInventori.php?go"  id="searchform"> 
<input  type="text" name="name" value="No Siri Barang"> 
<input  type="submit" name="submit" value="Search"> 
</br><a href="registerInventori.php">Tambah Maklumat Inventori</a>
<table>
  <tr>
    <th>No Siri Barang</th>
    <th>Kategori Barang</th>
    <th>Nama Barang</th>
     <th>Jumlah Barang </th> 
     <th>Tarikh Inventori </th>
     <th>Pembekal Barangan </th>
     <th>Penyenggara</th> 
     <th>Tarikh Selenggara </th>
    
  </tr>
<?php 
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
?>	
    
    	<tr>
    	<td><?php echo $row["noSiri"] ?></td>
    	<td><?php echo $row["kategoriBarang"] ?></td>
    	<td><?php echo $row["nama"] ?></td>
    	 <td><?php echo $row["qty"] ?></td>
    	<td><?php echo $row["inventori"] ?></td>
        <td><?php echo $row["pembekalBarang"] ?></td>
    	<td><?php echo $row["pembekal"] ?></td>
    	<td><?php echo $row["seliaan"] ?></td>
    	
    	
    	
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