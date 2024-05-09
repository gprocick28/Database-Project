<!DOCTYPE html>
<html>

<head>
    <title>Remove Cars</title>
</head>

<body>

<?php // Inserts cars into the database

    include "/users/kent/student/bjennin4/config.php";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Taking values from the form data
    $VIN = $_REQUEST['VIN'];

    $sql = "DELETE FROM `vehicles` WHERE VIN = '$VIN'";

    if ($conn->query($sql) === TRUE) {
        echo "Car deleted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        echo "<br> Make sure nobody owns this car.";
    }

    $conn->close();
?>
<a href="employee.php">Return to Employee Page</a>

</body>
</html>