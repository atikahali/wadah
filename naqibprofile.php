<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>List Naqib</title><link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
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

<?php
	
			if (isset($_GET['naqib_id']))
			$naqib_id = $_GET['naqib_id'];
		else
			$naqib_id = 0;
			include 'dbconnect.php';
		
		
		
		$query = "SELECT * FROM `naqib` WHERE `naqib_id`= '$naqib_id'" ;
		$result = mysqli_query($conn,$query) or die('SQL error');
		$row = mysqli_fetch_array($result, MYSQLI_ASSOC)

		?>
<body>
<div align="center">
  <p>&nbsp;</p>
  <p><strong><span class="style3">NAQIB PROFILE</span></strong></p>
  <p>
    <input type="image" name="imageField" id="imageField" src="profile-default.jpg" />
  </p>
  <table width="452" border="1">
     <tr>
      <th width="106" scope="row"><div align="center"> NAQIB ID </div></th>
      <td width="330">&nbsp; <?php echo $row['naqib_id']; ?></td>
    </tr>
	<tr>
	     <tr>
      <th width="106" scope="row"><div align="center"> NAME </div></th>
      <td width="330">&nbsp; <?php echo $row['naqib_name']; ?></td>
    </tr>
	<tr>
	     <tr>
      <th width="106" scope="row"><div align="center"> ADDRESS </div></th>
      <td width="330">&nbsp; <?php echo $row['naqib_address']; ?></td>
    </tr>
	<tr>
	     <tr>
      <th width="106" scope="row"><div align="center"> GENDER </div></th>
      <td width="330">&nbsp; <?php echo $row['gender']; ?></td>
    </tr>
	<tr>
	     <tr>
      <th width="106" scope="row"><div align="center"> IC NUMBER </div></th>
      <td width="330">&nbsp; <?php echo $row['IC_number']; ?></td>
    </tr>
	<tr>

	</tr>
  </table>
  <a href="home.php" >Home</a><br>
  <p class="style4">&nbsp;</p>
</div>
<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
</body>
</html>
