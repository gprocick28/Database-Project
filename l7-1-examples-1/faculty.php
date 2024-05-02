<html>
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
     // output data of each row
       while($row = $result->fetch_assoc()) {
           echo "id: " . $row["id"]. " - Name: " . $row["name"]. " - Department: " . $row["dept_name"]. "<br>";
             }
             } else {
               echo "0 results";
               }
   $conn->close();

?> <!-- this is the end of our php code -->
<p> And now we're back to HTML 
</body>
</html>
