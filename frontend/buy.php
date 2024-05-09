<!DOCTYPE html>
<html>

<head>
    <title>Buy Cars</title>
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
    $customer_ID =  $_REQUEST['customer_ID'];
    $VIN = $_REQUEST['VIN'];

    $sql = "UPDATE `vehicles` SET `customer_ID` = $customer_ID WHERE `VIN` = '$VIN'";

    if ($conn->query($sql) === TRUE) {
        echo "Car bought successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
?>
<a href="home.php">Return to Home Page</a>

</body>
</html>