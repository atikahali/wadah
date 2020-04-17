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
		<center><h1>Pendaftaran Aktiviti Usrah</h1></center>
		<p><?php include ("dropdown.php");?></p>
		<style>
			body {
				background-repeat: no-repeat;
    			background-position: right top;
    			margin-right: 0px;
    			background-attachment: fixed;
			}
		</style><?php   
		//TO ADD DATA
		if (isset($_POST['add'])) {
			$au_date = addslashes($_POST['au_date']);
			
			$au_location = addslashes($_POST['au_location']);
			
			$au_tajuk = addslashes($_POST['au_tajuk']);
			
			$au_tuanrumah = addslashes($_POST['au_tuanrumah']);

			$usrah_id = addslashes($_POST['usrah_id']);
			include 'dbconnect.php';
			
			$query = "INSERT INTO meeting (au_date, au_tuanrumah, au_location, au_tajuk, usrah_id) VALUES 
			('$au_date', '$au_tuanrumah', '$au_location', '$au_tajuk', '$usrah_id')";
	
			$result = mysqli_query($conn,$query);
			if ($result)
				echo 'Add success';
			else
				echo 'Add failed';
		}
		?>
		
            <br>
        <p>Sila lengkapkan semua maklumat.</p>
        	<form action="addactivity.php" method="post">
        
        <table align="center">
       <tr>
       <td width="145"><span class="style2"></span>Tarikh</td>
        <td width="163"> 
             
          <br><input name="au_date" type="date" onChange="showCat1(this.value)" onKeyUp="char(this)" size="23" maxlength="15" placeholder="eg : 960961451140" required />
        </td>
         </tr>
               
        <tr>
        <br>
        <td>Lokasi</td>
        <td>
        <br>  <input name="au_location" value="" type="text" onKeyUp="char(this)" size="23" maxlength="50" required/>
        </td>
        <td>&nbsp;</td>
        </tr>
        
       <TR>
					
				</TR>
     
       <tr>
       <td>Tajuk</td>
        <td>
         <br> <input name="au_tajuk" value="" type="text" size="23" required/></td>
        <td>&nbsp;</td>
        </tr>
        
        <tr>
       <td>Tuan Rumah </td>
        <td>
         <br> <input name="au_tuanrumah" value="" type="text" size="23" required/></td>
        <td>&nbsp;</td>
        </tr>
         <tr>
       <td>ID Usrah </td>
        <td>
         <br> <input name="usrah_id" value="" type="text" size="23" required/></td>
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

	
	