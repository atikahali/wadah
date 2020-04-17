<?php
		
		if (isset($_POST['delete']) && isset($_POST['staffid'])) {
			include 'dbconnect.php';
			$staffid = $_POST['staffid'];
			$query = "DELETE FROM staff WHERE staffid = '$staffid'";
			$result = mysqli_query($conn,$query); or die('sql error1');
			if ($result)
				echo 'Delete success';
			else
				echo 'Delete failed';
			//echo 'The staff information is deleted<br>';
			echo '<a href="staff_view.php">Back</a>';		}
		
		if (isset($_POST['cancel'])) {
			echo 'Delete operation is cancelled <br>';
			echo '<a href="staff_view.php">Back</a>';
		}
		
		//if (isset($_GET['staffid'])) {
		//	$staffid = $_GET['staffid'];
		//	include 'dbconnect.php';
		//	$query = "SELECT staffid, staffname	 FROM staff where staffid = $staffid";
		//	$result = mysql_query($query) or die('SQL ERROR 2');
		//	$row = mysql_fetch_array($result, MYSQL_ASSOC);
				
				
			echo "<h3>Delete staff {$row['staffname']}</h3>";
			echo '<form action="staff_delete.php" method="post">';
			$staffid = $row['staffid'];
			echo '<input name="staffid" type="hidden" value="{$staffid}">';
			echo '<input name="delete" type="submit" value=" OK ">';
			echo '<input name="cancel" type="submit" value=" CANCEL "';
			echo '</form>';
		//}
		?>
		

		
	
  </tr>