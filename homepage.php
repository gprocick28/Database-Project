<!DOCTYPE html>
<html>
    <body>
        <h1>Wheels INC</h1>
        <p><h2>Welcome to our car website!</h2></p>
    </body>
</html>

<?php
include "/users/kent/student/bjennin4/config.php";

 // Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM vehicles";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
// output data of each row
    while($row = $result->fetch_assoc()) {
        // echo "VIN: " . $row["VIN"]. " - Make: " . $row["make"]. " - Model: " . $row["model"]. "<br>";
        
        // Print all data in table
        foreach ($row as $key => $value) {
            echo $key . ": " . $value . "<br>";
        }
        
        // Line break between cars
        echo "<br>"; 
    }
} else {
    echo "0 results";
}
$conn->close();
?>
