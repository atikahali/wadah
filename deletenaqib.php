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
		if (isset($_GET['naqib_id'])) {
			$naqib_id = addslashes($_GET['naqib_id']);
									
			include 'dbconnect.php';
			
			$query = "DELETE FROM naqib where naqib_id = $naqib_id";
	
			$result = mysqli_query($conn,$query);
			if ($result)
				echo 'Delete success';
			else
				echo 'Delete failed';
		}
		?>
		
	