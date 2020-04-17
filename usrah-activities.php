<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>List Naqib</title><style type="text/css">
<!--.style3 {font-size: 18px}
.style4 {font-size: 18px; font-weight: bold; }-->
</style></head>

<?php
			include 'dbconnect.php';
		
		
		
		$query = "SELECT `usrah`.*,`naqib`.* FROM `usrah`
		RIGHT JOIN `naqib` ON `naqib`.`naqib_id`= `usrah`.`naqib_id`" ;
		
		 
		$query1 =  "SELECT `usrah`.*,`naqib`.* FROM `usrah`
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
      <td width="193"><div align="center"><strong>ACTIVITIES</strong></div></td>
    </tr>
    <tr><?php $count = 0;?>
	<?php 
		 while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
		 {
	?>
	
      <td><div align="center">
      	<?php $count = $count+1; print($count);?>
      </div></td>
      

      
      
      <td><div align="center"><?php echo $row['usrah_naqib'];?></div></td>
	  <td><div align="center"><?php echo $row['naqib_name'];?></div></td>
      <TD><div align="center"><a href="listactivities.php?usrah_naqib=<?php echo $row['usrah_naqib']; ?>">View</a></div></TD>

    </tr>
	<tr>
	<?php $count;?>
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
