<!DOCTYPE html>
<html>

<head>
    <title>Sell Cars</title>
</head>

<body>

<?php // Removes customer associated w/ car

    include "/users/kent/student/bjennin4/config.php";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Taking values from the form data
    $VIN = $_REQUEST['VIN'];

    $sql = "UPDATE `vehicles` SET `customer_ID` = NULL WHERE `VIN` = '$VIN'";

    if ($conn->query($sql) === TRUE) {
        echo "Car sold successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
?>

</body>
</html>