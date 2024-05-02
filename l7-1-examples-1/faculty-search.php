<html>
<style>
table, th, td {
  border: 1px solid black;
}
<?php
//Define some constants in this PHP code block
$servername = "localhost";
$username = "wreed6";
$password = "x";
$dbname = "wreed6";
?>


</style
<body>
<p><h2>University Faculty Directory Search:</h2></p>
<form action="faculty-search.php" method=get>
	Enter Faculty name: <input type=text size=20 name="name">
	<p>Enter Faculty ID number: <input type=text size=5 name="id">
        <p> <input type=submit value="submit">
                <input type="hidden" name="form_submitted" value="1" >
</form>


<?php //starting php code again!
if (!isset($_GET["form_submitted"]))
{
		echo "Hello. Please enter a faculty name or ID number and submit the form.";
}
else {
// Create connection

 $conn = new mysqli($servername, $username, $password, $dbname);
 // Check connection
 if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
 }
 if (!empty($_GET["name"]))
 {
   $profName = $_GET["name"]; //gets name from the form
   $sql = "SELECT id, name, dept_name FROM instructor where name='$profName'";
   $result = $conn->query($sql);
 }
 elseif (!empty($_GET["id"]))
 {
   $profID = $_GET["id"]; //gets name from the form
   $sql = "SELECT id, name, dept_name FROM instructor where id=$profID";
   $result = $conn->query($sql);
 }
 else {
	 echo "<b>Please enter a name or an ID number</b>";
 }
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
               echo "$name not found. 0 results";
	} 
   $conn->close();
 } //end else condition where form is submitted
  ?> <!-- this is the end of our php code -->
<p> Thanks for using the directory search! 
</body>
</html>
