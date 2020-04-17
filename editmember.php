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
		<center><h1>Edit Maklumat Ahli Usrah</h1></center>
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
		if (isset($_GET['ic_ahli']))
			$ic_ahli = $_GET['ic_ahli'];
		else
			$ic_ahli = 0;
		
		include 'dbconnect.php';
		$query = "SELECT ic_ahli, idwadah_ahli, nama_ahli, usrah_ahli
		FROM ahli where ic_ahli = '$ic_ahli'";
		$result = mysqli_query($conn,$query) or die('SQL error');
		$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
		
		//to edit data
		if (isset($_POST['edit']) && isset($_POST['ic_ahli'])) {
			
			$ic_ahli = addslashes($_POST['ic_ahli']);
			$idwadah_ahli = addslashes($_POST['idwadah_ahli']);
			$nama_ahli = addslashes($_POST['nama_ahli']);
			$usrah_ahli = addslashes($_POST['usrah_ahli']);

		include 'dbconnect.php';
			
			$query = "UPDATE ahli SET ic_ahli = '$ic_ahli' , idwadah_ahli = '$idwadah_ahli', nama_ahli = '$nama_ahli', usrah_ahli = '$usrah_ahli' WHERE ic_ahli = '$ic_ahli'";
				
			$result = mysqli_query($conn,$query);
			if ($result)
				echo 'Edit success';
			else
				echo 'Edit failed';
		}mysqli_close($conn);
?>
	
		
		<H1>Edit Maklumat Ahli Usrah</H1><br>
        <p>Sila lengkapkan semua maklumat.</p>
        
        <form action="<?php echo $_SERVER['PHP_SELF']?>?ic_ahli=<?php print $ic_ahli?>" method="post"><table align="center">
        
       <tr><td width="145"><span class="style2"></span>MyKad</td>
        <td width="163"><br><input name="ic_ahli" type="text" value="<?php echo $row['ic_ahli']; ?>" onChange="showCat1(this.value)" onKeyUp="char(this)" size="23" maxlength="15" placeholder="eg : 960961451140" required /></td>
         </tr>
               
        <tr><td>ID Wadah</td>
        <td><br><input name="idwadah_ahli" value="<?php echo $row['idwadah_ahli']; ?>" type="text" onKeyUp="char(this)" size="23" maxlength="12" placeholder="eg : A1" required/></td>
        </tr>
         
       <tr>
       <td>Nama Penuh</td>
        <td><br> <input name="nama_ahli" value="<?php echo $row['nama_ahli']; ?>" type="text" size="23" required/></td>
        </tr>
        
        <tr>
       <td>Usrah Ahli</td>
        <td><br><input name="usrah_ahli" value="<?php echo $row['usrah_ahli']; ?>" type="text" size="23" required/></td>
        </tr>
        
        
        <td colspan="5">
        <label>
          <div align="right">
           <input type="hidden" name="ic_ahli" value="<?php echo $row['ic_ahli']; ?>">
            <input type="submit" name="edit" value="Edit";/>
          </div>
        </label></td>
			</tr></table></form>
    
</body>	
	
	