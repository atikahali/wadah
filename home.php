<!DOCTYPE html>
<html>
<head>
	
	<title>Home</title>
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
		<p><?php include ("autoheader.php");?></p>
		<center><h1>Welcome to eWadah 2018</h1></center>
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
	<center><img id="image" src="selawatkamilah.png"></center>
	</div>
	
	<div class="footer">
		Atikah Ali &copy; <?php print date("Y");?>
	</div>

</body>
</html>