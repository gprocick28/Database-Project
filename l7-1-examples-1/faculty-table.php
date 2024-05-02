<html>
<style>
table, th, td {
  border: 1px solid black;
}
</style
<body>
<p><h2>List of University Faculty Members:</h2></p>

<?php // this line starts PHP Code
$servername = "localhost";
$username = "wreed6";
$password = "x";
$dbname = "wreed6";

// Create connection
 $conn = new mysqli($servername, $username, $password, $dbname);
 // Check connection
 if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
   }

   $sql = "SELECT id, name, dept_name FROM instructor";
   $result = $conn->query($sql);

   if ($result->num_rows > 0) {
     	// Setup the table and headers
	echo "<table><tr><th>ID</th><th>Name</th><th>Department</th></tr>";
	// output data of each row into a table row
	 while($row = $result->fetch_assoc()) {
		 echo "<tr><td>".$row["id"]."</td><td>".$row["name"]."</td><td> ".$row["dept_name"]."</td></tr>";
	 }

	echo "</table>"; // close the table
	echo "There are ". $result->num_rows . " results.";
	// Don't render the table if no results found
   	} else {
               echo "0 results";
               }
     $conn->close();

?> <!-- this is the end of our php code -->
<p> And now we're back to HTML 
</body>
</html>
