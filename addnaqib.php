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
		</style>
		<?php   
		//TO ADD DATA
		if (isset($_POST['add'])) {
			$naqib_id = addslashes($_POST['naqib_id']);
									
			$idWadah = addslashes($_POST['idWadah']);
						
			$naqib_name = addslashes($_POST['naqib_name']);
			
			$IC_number = addslashes($_POST['IC_number']);
						
			$gender = addslashes($_POST['gender']);
			
			$naqib_address = addslashes($_POST['naqib_address']);
			include 'dbconnect.php';
			
			$query = "INSERT INTO naqib (naqib_id,idWadah,naqib_name,IC_number,gender,naqib_address) VALUES 
			('$naqib_id', '$idWadah', '$naqib_name', '$IC_number','$gender', '$naqib_address')";
	
			
			
			$result = mysqli_query($conn,$query);
			if ($result)
				echo 'Add success';
			else
				echo 'Add failed';
		}
		?>
		<H1>Pendaftaran Naqib</H1>
            <br>
        <p>Sila lengkapkan semua maklumat.</p>
        	<form action="addnaqib.php" method="post">
        
        <table align="center">
       <tr>
       <td width="145"><span class="style2"></span>ID Naqib</td>
        <td width="163"> 
             
          <br><input name="naqib_id" type="text" onChange="showCat1(this.value)" onKeyUp="char(this)" size="23" maxlength="15" placeholder="eg : 960961451140" required />
        </td>
         </tr>
               
        <tr>
        <br>
        <td>ID Wadah</td>
        <td>
        <br>  <input name="idWadah" value="" type="text" onKeyUp="char(this)" size="23" maxlength="12" placeholder="eg : A1"/>
        </td>
        <td>&nbsp;</td>
        </tr>
        
       <TR>
					
				</TR>
     
       <tr>
       <td>Nama Penuh</td>
        <td>
         <br> <input name="naqib_name" value="" type="text" size="23" /></td>
        <td>&nbsp;</td>
        </tr>
        
        <tr>
       <td>MyKad </td>
        <td>
         <br> <input name="IC_number" value="" type="text" size="23" /></td>
        <td>&nbsp;</td>
        </tr>
        
       <tr>
       <td>Gender </td>
        <td>
         <br> <input name="gender" value="" type="text" size="23" /></td>
        <td>&nbsp;</td>
        </tr>
        
       <tr>
       <td>Alamat </td>
        <td>
         <br> <input name="naqib_address" value="" type="text" size="23" /></td>
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
	
	