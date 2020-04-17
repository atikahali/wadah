<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.navbar {
  overflow: show;
  background-color: #333;
  font-family: Arial, Helvetica, sans-serif;
}

.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.dropdown {
  float: left;
  overflow: show;
}

.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: red;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}
</style>
</head>
<body>

<div class="navbar">
  <a href="home.php">Laman Utama</a>
	
<div class="dropdown">
    <button class="dropbtn">Usrah 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="listnaqib.php">Senarai Naqib</a>
      <a href="listusrahusrah.php">Senarai Usrah</a>
	  <a href="categoryusrah.php">Aktiviti Usrah</a>
    </div>
  </div>	
	
  <div class="dropdown">
    <button class="dropbtn">Aktiviti 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="activity.php">Borang Maklumat Aktiviti</a>
      <a href="activity_view.php">Butiran Maklumat Aktiviti</a>
    </div>
  </div>
	  
  <div class="dropdown">
    <button class="dropbtn">Peserta 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="participant.php">Borang Maklumat Peserta</a>
      <a href="participant_view.php">Butiran Maklumat Peserta</a>
    </div>
  </div>  
	  
  <div class="dropdown">
    <button class="dropbtn">Asset 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="registerInventori.php">Pendaftaran Maklumat Inventori</a>
      <a href="detailInventori.php">Senarai Maklumat Inventori</a>
    </div>
  </div>  
	
 <div class="dropdown">
    <button class="dropbtn">Sewaan 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="registerRental.php">Pendaftaran Maklumat Penyewa</a>
      <a href="detailRental.php">Senarai Maklumat Penyewa</a>
    </div>
    </div> 
    
   <a href="logout.php">Keluar</a>
	
</div>
</body>
</html>
