<head>
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
		<center><h1>Edit Maklumat Naqib</h1></center>
		<p><?php include ("dropdown.php");?></p>
		<style>
			body {
				background-repeat: no-repeat;
    			background-position: right top;
    			margin-right: 200px;
    			background-attachment: fixed;
			}
		</style>
<?php  
		//to retrived data
		if (isset($_GET['naqib_id']))
			$naqib_id = $_GET['naqib_id'];
		else
			$naqib_id = 0;
		
		include 'dbconnect.php';
		$query = "SELECT naqib_id, idwadah, naqib_name, IC_number, gender, naqib_address
		FROM naqib where naqib_id = '$naqib_id'";
		$result = mysqli_query($conn,$query) or die('SQL error');
		$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
		
		//to edit data
		if (isset($_POST['edit']) && isset($_POST['naqib_id'])) {
			
			$naqib_id = addslashes($_POST['naqib_id']);
			$idwadah = addslashes($_POST['idwadah']);
			$naqib_name = addslashes($_POST['naqib_name']);
			$IC_number = addslashes($_POST['IC_number']);
			$gender = addslashes($_POST['gender']);
			$naqib_address = addslashes($_POST['naqib_address']);

		include 'dbconnect.php';
			
			$query = "UPDATE naqib SET 
			naqib_id = '$naqib_id' , 
			idwadah = '$idwadah', 
			naqib_name = '$naqib_name', IC_number = '$IC_number', 
			gender = '$gender', 
			naqib_address = '$naqib_address' WHERE naqib_id = '$naqib_id'";
				
			$result = mysqli_query($conn,$query);
			if ($result)
				echo 'Edit success';
			else
				echo 'Edit failed';
		}mysqli_close($conn);
?>
	
		
		<H1>Edit Maklumat Ahli Usrah</H1><br>
        <p>Sila lengkapkan semua maklumat.</p>
        
        <form action="<?php echo $_SERVER['PHP_SELF']?>?naqib_id=<?php print $naqib_id?>" method="post"><table align="center">
        
       <tr><td width="145"><span class="style2"></span>ID Naqib</td>
        <td width="163"><br><input name="naqib_id" type="text" value="<?php echo $row['naqib_id']; ?>" onChange="showCat1(this.value)" onKeyUp="char(this)" size="23" maxlength="15" placeholder="eg : N1" required /></td>
         </tr>
               
        <tr><td>ID Wadah</td>
        <td><br><input name="idwadah" value="<?php echo $row['idwadah']; ?>" type="text" onKeyUp="char(this)" size="23" maxlength="12" placeholder="eg : W1" required/></td>
        </tr>
         
       <tr>
       <td>Nama Penuh</td>
        <td><br> <input name="naqib_name" value="<?php echo $row['naqib_name']; ?>" type="text" size="23" required/></td>
        </tr>
        
        <tr>
       <td>MyKad</td>
        <td><br><input name="IC_number" value="<?php echo $row['IC_number']; ?>" type="text" size="23" required/></td>
        </tr>
        
       <tr>
       <td>Gender</td>
        <td><br> 		<input type="radio" name="gender" value="<?php print $gender?>">Lelaki
		<input type="radio" name="gender" value="<?php print $gender?>">Perempuan  </td>
        </tr>
        
        <tr>
       <td>Alamat</td>
        <td><br><input name="naqib_address" value="<?php echo $row['naqib_address']; ?>" type="text" size="23" required/></td>
        </tr>
        
        
        <td colspan="5">
        <label>
          <div align="right">
           <input type="hidden" name="naqib_id" value="<?php echo $row['naqib_id']; ?>">
            <input type="submit" name="edit" value="Edit";/>
          </div>
        </label></td>
			</tr></table></form>
    
</body>	
	
	