<?php
if(isset($_POST['submit'])){
if(isset($_GET['go'])){
 if(preg_match("/^[  a-zA-Z]+/", $_POST['name'])){
 $name=$_POST['name'];
 //connect  to the database
 $db=mysql_connect  ("servername", "username",  "password") or die ('I cannot connect to the database  because: ' . mysql_error());
 //-select  the database to use
$mydb=mysql_select_db("webapp_db");
 //-query  the database table
$sql="SELECT  noAhli, nama , alamat, telefon, sewaan, nama_barang, tarikh, qty FROM rental WHERE nama LIKE '%" . $nama .  "%' OR sewaan LIKE '%" . $sewaan ."%'";
//-run  the query against the mysql query function
//-create  while loop and loop through result set
while($row=mysql_fetch_array($result)){
    $noAhli = $row['noAhli'] ;
    $nama =  $row["nama"] ;
    $alamat = $row["alamat"] ;
    $telefon =$row["telefon"];
    $sewaan =  $row["sewaan"] ;
    $nama_barang = $row["nama_barang"] ;
    $tarikh= $row["tarikh"];
    $qty = $row["qty"];

//-display the result of the array
echo "<ul>\n";
echo "<li>" . "<a  href=\"detailRental.php?id=$noAhli\">"   .$nama  . " " . $alamat.  "</a></li>\n";
  echo "</ul>";
}
}
else{
 echo  "<p>Please enter a search query</p>";
                      }
 }
  }
	?> 