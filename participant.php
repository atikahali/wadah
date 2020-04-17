<!DOCTYPE html>
<html>
<head>
	
	<title>Peserta</title>
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
		<center><h1>Borang Maklumat Peserta</h1></center>
		<p><?php include ("dropdown.php");?></p>
		<style>
			body {
				background-repeat: no-repeat;
    			background-position: right top;
    			margin-right: 200px;
    			background-attachment: fixed;
			}
		</style>
	</div>

<div class="container" id="main-content">
	<form method="post" action="<?php echo $_SERVER['PHP_SELF']?>">
	<center><h2>Maklumat Peserta</h2></center>
	IC:
  		<input type="text" name="id" value=""></br>
					 
	Nama:
  		<input type="text" name="name" value=""></br>
	
	Jantina:
		<input type="radio" name="gender" value="Male">Lelaki
		<input type="radio" name="gender" value="Female">Perempuan 
		</br>
  
 	Tarikh Lahir:
   		<input name="datebirth" type="date" value=""><br/>
	   
  	Alamat:<br/> 
  	Jalan:
    	<input type="text" name="street" value=""></br>
															 
	Bandar:
  		<select name="city">  
			<option value="Arau" selected="selected" value="">Arau</br>
   	 		<option value="Alor Setar" value="">Alor Setar</br>
    		<option value="Georgetown" value="">Georgetown</br>
    		<option value="Kuala Kangsar" value="">Kuala Kangsar</br>  
    		<option value="Shah Alam" value="">Shah Alam</br> 
    		<option value="Putrajaya" value="">Putrajaya</br>
  		</select>
  		<br/>
    
	Poskod: 
		<input type="text" name="postcode" value=""></br>
  
	Negeri:
    	<select name="state">  
      		<option value="Perlis" selected="selected" value="">Perlis</br>
      		<option value="Kedah" value="">Kedah</br>
      		<option value="Pulau Pinang" value="">Pulau Pinang</br>
      		<option value="Perak" value="">Perak</br>  
     		<option value="Selangor" value="">Selangor</br>  
      		<option value="Wilayah Persekutuan" value="">Wilayah Persekutuan</br>
   	 	</select>
		<br/><br/>
  
	<center><strong>Borang Soal Selidik</strong></center>
	1. Secara keseluruhan, adakah anda berpuas hati dengan program ini?</br>
  		Nilai: 
		<input type="radio" name="question1" value="1">Tidak Setuju
		<input type="radio" name="question1" value="2">Tidak Pasti 
		<input type="radio" name="question1" value="3">Setuju
		</br></br>
					 
	2.Sila nilai aspek-aspek berikut:</br>
		a). Aturcara majlis/program berjalan lancar</br>
		Nilai: 
		<input type="radio" name="question2" value="1">Tidak Setuju
		<input type="radio" name="question2" value="2">Tidak Pasti 
		<input type="radio" name="question2" value="3">Setuju
		</br></br>

		b). Tempat yang digunakan untuk majlis/program selesa dan bersih</br>
		Nilai: 
		<input type="radio" name="question3" value="1">Tidak Setuju
		<input type="radio" name="question3" value="2">Tidak Pasti 
		<input type="radio" name="question3" value="3">Setuju
		</br></br>
  		
		c). Makanan yang disediakan mencukupi</br>
		Nilai: 
		<input type="radio" name="question4" value="1">Tidak Setuju
		<input type="radio" name="question4" value="2">Tidak Pasti
		<input type="radio" name="question4" value="3">Setuju
		</br></br>
 	
   3. Adakah anda akan mengesyorkan majlis/program ini kepada rakan anda?</br>
  		Nilai: 
		<input type="radio" name="question5" value="1">Tidak Setuju
		<input type="radio" name="question5" value="2">Tidak Pasti 
		<input type="radio" name="question5" value="3">Setuju
		</br>
		<br/><br/>

    <input type="submit" name="submit" value="Simpan">
	</form>
	
<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$id = $_POST['id'];
		$name = $_POST['name'];
		$gender = $_POST['gender'];
		$datebirth = $_POST['datebirth'];
		$street = $_POST['street'];
		$city = $_POST['city'];
		$postcode = $_POST['postcode'];
 		$state = $_POST['state'];  
		$question1 = $_POST['question1']; 
		$question2 = $_POST['question2']; 
		$question3 = $_POST['question3']; 
		$question4 = $_POST['question4']; 
		$question5 = $_POST['question5']; 
		
    	if (isset($_POST['id']))
        	$id = $_POST['id'];
		else
        	$id = "";
		
		if (isset($_POST['name']))
        	$name = $_POST['name'];
		else
        	$name = "";
		
		if (isset($_POST['gender']))
        	$gender = $_POST['gender'];
		else
        	$gender = "";
		
		if (isset($_POST['datebirth']))
        	$datebirth = $_POST['datebirth'];
		else
        	$datebirth = "";
		
		if (isset($_POST['street']))
        	$street = $_POST['street'];
		else
        	$street = "";
		
		if (isset($_POST['city']))
        	$city = $_POST['city'];
		else
        	$city = "";
		
		if (isset($_POST['postcode']))
        	$postcode = $_POST['postcode'];
		else
        	$postcode = "";
  		
		if (isset($_POST['state']))
        	$state = $_POST['state'];
		else
        	$state = "";
		
		if (isset($_POST['question1']))
        	$question1 = $_POST['question1'];
		else
        	$question1 = "";
		
		if (isset($_POST['question2']))
        	$question2 = $_POST['question2'];
		else
        	$question2 = "";
		
		if (isset($_POST['question3']))
        	$question3 = $_POST['question3'];
		else
        	$question3 = "";
		
		if (isset($_POST['question4']))
        	$question4 = $_POST['question4'];
		else
        	$question4 = "";
		
		if (isset($_POST['question5']))
        	$question5 = $_POST['question5'];
		else
        	$question5 = "";
		
  	    $conn = mysqli_connect("127.0.0.1", "root", "", "wadah1") or die (mysql_error ());
        
    // SQL query
    $sql = "INSERT INTO participant (id, name, gender, datebirth, street, city, postcode, state, question1, question2, question3, question4, question5) VALUES ('$id', '$name', '$gender', '$datebirth', '$street', '$city', '$postcode', '$state', '$question1', '$question2', '$question3', '$question4', '$question5')";
        
    // Execute the query (the recordset $rs contains the result)
    if (mysqli_query($conn, $sql)) {
        echo "New record is created successfully";
    } else {
        echo "Error: " . $sql . "<br>" .mysqli_error($conn);
    }
    mysqli_close($conn);
	}
	?>
</div>

	<div class="footer">
		Atikah Ali &copy; <?php print date("Y");?>
	</div>

</body>
</html>
