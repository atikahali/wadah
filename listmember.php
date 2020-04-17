<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>List Member</title><link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
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
		</style><style>
 table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style></head>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>List Usrah Member</title><style type="text/css">
<!--.style3 {font-size: 18px}
.style4 {font-size: 18px; font-weight: bold; }-->
</style></head>

<?php
		if (isset($_GET['usrah_naqib']))
			$usrah_naqib = $_GET['usrah_naqib'];
		else
			$usrah_naqib = 0;
		
		include 'dbconnect.php';
		
		
		
		$query = "SELECT `usrah`.*,`ahli`.*,`naqib`.* FROM `usrah`
		LEFT JOIN  `ahli` ON `ahli`.`usrah_ahli` = `usrah`.`usrah_naqib`
		RIGHT JOIN `naqib` ON `naqib`.`naqib_id`= `usrah`.`naqib_id`
		WHERE `usrah`.`usrah_naqib` =  '$usrah_naqib'";
		 
		$query1 = "SELECT ic_ahli,idwadah_ahli,nama_ahli FROM ahli WHERE usrah_ahli = '$usrah_naqib'";  

		
		$result = mysqli_query($conn,$query1) or die('SQL error');
		
		$result1 = mysqli_query($conn,$query) or die('SQL error2');
		$row1 = mysqli_fetch_array($result1, MYSQLI_ASSOC)

		?>
<body>
<div align="center">
  <p><strong>USRAH MEMBERS</strong></p>
  <table width="450" border="1">
    <tr>
      <th width="158" scope="row"><div align="right">NAQIB : </div></th>
      <td>&nbsp; <?php echo $row1['naqib_name']; ?></td>
    </tr>
    <tr>
      <th scope="row"><div align="right">NAQIB ID : </div></th>
      <td>&nbsp; <?php echo $row1['naqib_id']; ?></td>
    </tr>
    <tr>
      <th scope="row"><div align="right">USRAH NAQIB : </div></th>
      <td>&nbsp; <?php echo $row1['usrah_naqib']; ?></td>
    </tr>
  </table>
  
  <p><strong><span class="style3">LIST OF USRAH MEMBER</span></strong></p>
  
  <a href="addmember.php" >Add New Member</a><br>
  <table width="577" border="1">
    <tr>
      <th width="46" scope="row"><div align="center">NO</div></th>
      <td width="102"><div align="center"><strong>IC AHLI</strong></div></td>
      <td width="131"><div align="center"><strong>ID WADAH AHLI</strong></div></td>
      <td width="195"><div align="center"><strong>NAMA AHLI</strong></div></td>
      <td width="69"><div align="center"><strong>DELETE</strong></div></td>
    </tr>
    <tr><?php $count = 0;?>
	<?php 
		 while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
		 {
	?>

      <td><div align="center"><?php $count = $count+1; print($count);?></div></td>
      <td><div align="center"><?php echo $row['ic_ahli'];?></div></td>
      <td><div align="center"><?php echo $row['idwadah_ahli'];?></div></td>
      <td><div align="center"><?php echo $row['nama_ahli'];?></div></td>
	  <td><div align="center"><a href="deletemember.php".php?ic_ahli=<?php echo $row['ic_ahli']; ?>">Delete</a></div></td>
    </tr>
	<tr><?php $count;?>
	<?php
		   }
	?>
	</tr>
  </table>
   <a href="home.php" >Home</a><br>
  <a href="listnaqib.php" >Back</a><br>
  <p class="style4">&nbsp;</p>
</div>
<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
</body>
</html>


