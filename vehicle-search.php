<!DOCTYPE html>
<html>
    <body>
    <h1>Wheels INC</h1>

    <p><h2>Look for a vehicle:</h2></p>

    <form action="vehicle-search.php" method=get>
        <p>Enter Vehicle Make: <input type=text size=5 name="make"></p>
        <p> <input type=submit value="submit"></p>
        <input type="hidden" name="form_submitted" value="1" >
    </form>

    </body>
</html>


<?php
include "/users/kent/student/bjennin4/config.php";

if (!isset($_GET["form_submitted"]))
{
		echo "Hello. Please enter a vehicle make and submit the form.";
}
else {

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM vehicles WHERE make = ?";
    $result = $conn->query($sql);

    if (!empty($_GET["make"])) {
        // Gets the make from the form
        $vehicleMake = $_GET["make"]; 
        $sql = "SELECT * FROM vehicles where make='$vehicleMake'";
        $result = $conn->query($sql);
    } else {
        echo "<b>Please enter a vehicle make</b>";
    }
    if ($result->num_rows > 0) {
        // Setup the table and headers
        echo "<table><tr><th>VIN</th><th>Make</th><th>Model</th></tr>";
        // output data of each row into a table row
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>".$row["VIN"]."</td><td>".$row["make"]."</td><td> ".$row["model"]."</td></tr>";
        }
        echo "</table>"; // close the table

        echo "There are ". $result->num_rows . " results.";
    
    } else {
        // Don't render the table if no results found
        echo "$make not found. 0 results.";
    } 
    $conn->close();
}
?>
