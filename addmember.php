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
		<center><h1>Butiran Maklumat Aktiviti</h1></center>
		<p><?php include ("dropdown.php");?></p>
		<style>
			body {
				background-repeat: no-repeat;
    			background-position: right top;
    			margin-right: 200px;
    			background-attachment: fixed;
			}
		</style><?php   
		//TO ADD DATA
		if (isset($_POST['add'])) {
			$ic_ahli = addslashes($_POST['ic_ahli']);
									
			$idwadah_ahli = addslashes($_POST['idwadah_ahli']);
						
			$nama_ahli = addslashes($_POST['nama_ahli']);
			
			$usrah_ahli = addslashes($_POST['usrah_ahli']);

			include 'dbconnect.php';
			
			$query = "INSERT INTO ahli (ic_ahli, idwadah_ahli, nama_ahli, usrah_ahli) VALUES 
			('$ic_ahli', '$idwadah_ahli', '$nama_ahli', '$usrah_ahli')";
	
			$result = mysqli_query($conn,$query);
			if ($result)
				echo 'Add success';
			else
				echo 'Add failed';
		}
		?>
		<H1>Pendaftaran Ahli Usrah</H1>
            <br>
        <p>Sila lengkapkan semua maklumat.</p>
        	<form action="addmember.php" method="post">
        
        <table align="center">
       <tr>
       <td width="145"><span class="style2"></span>MyKad</td>
        <td width="163"> 
             
          <br><input name="ic_ahli" type="text" onChange="showCat1(this.value)" onKeyUp="char(this)" size="23" maxlength="15" placeholder="eg : 960961451140" required />
        </td>
         </tr>
               
        <tr>
        <br>
        <td>ID Wadah</td>
        <td>
        <br>  <input name="idwadah_ahli" value="" type="text" onKeyUp="char(this)" size="23" maxlength="12" placeholder="eg : A1"/>
        </td>
        <td>&nbsp;</td>
        </tr>
        
       <TR>
					
				</TR>
     
       <tr>
       <td>Nama Penuh</td>
        <td>
         <br> <input name="nama_ahli" value="" type="text" size="23" /></td>
        <td>&nbsp;</td>
        </tr>
        
        <tr>
       <td>Usrah Ahli </td>
        <td>
         <br> <input name="usrah_ahli" value="" type="text" size="23" /></td>
        <td>&nbsp;</td>
        </tr>
        
        
        <td colspan="5">
        <label>
          <div align="right">
            <input type="submit" name="add" value="Seterusnya";/>
          </div>
        </label></td>
        </tr>
    </table>
    
    <a href="home.php" >Home</a><br>
	
	