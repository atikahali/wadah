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
		<center>
		  <h1>Pendaftaran Kumpulan Usrah</h1></center>
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
			$usrah_id = addslashes($_POST['usrah_id']);
									
			$usrah_naqib = addslashes($_POST['usrah_naqib']);
						
			$usrah_time = addslashes($_POST['usrah_time']);
			
			$usrah_day = addslashes($_POST['usrah_day']);
						
			$naqib_id = addslashes($_POST['naqib_id']);
			
			$usrah_discussion = addslashes($_POST['usrah_discussion']);
			
			$usrah_level = addslashes($_POST['usrah_level']);
			include 'dbconnect.php';
			
			$query = "INSERT INTO usrah (usrah_id,usrah_naqib,usrah_time,usrah_day,naqib_id,usrah_discussion,usrah_level) VALUES 
			('$usrah_id', '$usrah_naqib', '$usrah_time', '$usrah_day','$naqib_id', '$usrah_discussion','$usrah_level')";
	
			
			
			$result = mysqli_query($conn,$query);
			if ($result)
				echo 'Add success';
			else
				echo 'Add failed';
		}
		?>

            <br>
        <p>Sila lengkapkan semua maklumat.</p>
        	<form action="addusrahgroup.php" method="post">
        
        <table align="center">
       <tr>
       <td width="145"><span class="style2"></span>ID Usrah</td>
        <td width="163"> 
             
          <br><input name="usrah_id" type="text" onChange="showCat1(this.value)" onKeyUp="char(this)" size="23" maxlength="15" placeholder="eg : U1" required />
        </td>
         </tr>
               
        <tr>
        <br>
        <td>Nama Usrah</td>
        <td>
        <br>  <input name="usrah_naqib" value="" type="text" onKeyUp="char(this)" size="23" maxlength="12" placeholder="eg : Haura"/>
        </td>
        <td>&nbsp;</td>
        </tr>
        
       <TR>
					
				</TR>
     
       <tr>
       <td>Masa</td>
        <td>
         <br> <input name="usrah_time" value="" type="text" size="23" /></td>
        <td>&nbsp;</td>
        </tr>
        
        <tr>
       <td>Hari </td>
        <td>
         <br> <input name="usrah_day" value="" type="text" size="23" /></td>
        <td>&nbsp;</td>
        </tr>
        
       <tr>
       <td>ID Naqib </td>
        <td>
         <br> <input name="naqib_id" value="" type="text" size="23" /></td>
        <td>&nbsp;</td>
        </tr>
        
       <tr>
       <td>Perbincangan </td>
        <td>
         <br> <input name="usrah_discussion" value="" type="text" size="23" /></td>
        <td>&nbsp;</td>
        </tr>
        
       <tr>
       <td>Tahap Usrah </td>
        <td>
         <br> <input name="usrah_level" value="" type="text" size="23" /></td>
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
	
	