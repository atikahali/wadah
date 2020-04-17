<?php
//set database connection configuration
$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "wadah1";

// Create connection
$conn = mysqli_connect($servername, $dbusername, $dbpassword, $dbname) or die("Connection failed: " . mysqli_connect_error());
if ($conn) {
    $sql = "SELECT id, name, gender, datebirth, street, city, postcode, state FROM `participant`";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        echo "<table border='1'>";
        echo "<tr><th>id</th><th>name</th><th>gender</th><th>datebirth</th><th>street</th><th>city</th><th>postcode</th><th>state</th></tr>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr><td>" . $row["id"] . "</td>";
            echo "<td>". $row["name"] . "</td>";
			echo "<td>". $row["gender"] . "</td>";
			echo "<td>". $row["datebirth"] . "</td>";
			echo "<td>". $row["street"] . "</td>";
			echo "<td>". $row["city"] . "</td>";
			echo "<td>". $row["postcode"] . "</td>";
            echo "<td>".  $row["state"] . "</td></tr>";
        }
        echo "</table>";
        
    }
}