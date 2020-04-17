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
			include 'dbconnect.php';
		
		
		
		$query = "SELECT DISTINCT `usrah`.usrah_naqib,`naqib`.naqib_name FROM `usrah`
		RIGHT JOIN `naqib` ON `naqib`.`naqib_id`= `usrah`.`naqib_id`" ;
		
		 
		$query1 =  "SELECT DISTINCT `usrah`.usrah_naqib,`naqib`.naqib_name FROM `usrah`
		RIGHT JOIN `naqib` ON `naqib`.`naqib_id`= `usrah`.`naqib_id`";
		
		$result = mysqli_query($conn,$query) or die('SQL error');
		
		$result1 = mysqli_query($conn,$query1) or die('SQL error2');
		$row1 = mysqli_fetch_array($result1, MYSQLI_ASSOC)

		?>
<body>
<div align="center">
  <p><strong><span class="style3">SENARAI USRAH</span></strong></p>
  <table width="577" border="1">
    <tr>
      <th width="50" scope="row"><div align="center">NO</div></th>
      
	  <td width="122"><div align="center"><strong>USRAH NAME </strong></div></td>
      <td width="184"><div align="center"><strong>NAQIB NAME</strong></div></td>
      <td width="193"><div align="center"><strong>DETAILS </strong></div></td>
    </tr>
    <tr><?php $count = 0;?>
	<?php 
		 while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
		 {
	?>

      <td><div align="center"><?php $count = $count+1; print($count);?></div></td>
        
      <td><div align="center"><?php echo $row['usrah_naqib'];?></div></td>
	  <td><div align="center"><?php echo $row['naqib_name'];?></div></td>
      <TD><div align="center"><a href="listmember.php?usrah_naqib=<?php echo $row['usrah_naqib']; ?>">Details</a></div></TD>

    </tr>
	<tr><?php $count;?>
	<?php
		   }
	?>
	</tr>
  </table>
  <a href="home.php" >Home</a><br>
  <p class="style4">&nbsp;</p>
</div>
<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
</body>
</html>
