<!DOCTYPE html>
<html>

<head>
    <title>Insert Cars</title>
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
    $first_name =  $_REQUEST['first_name'];
    $last_name = $_REQUEST['last_name'];
    $gender =  $_REQUEST['gender'];
    $address = $_REQUEST['address'];
    $email = $_REQUEST['email'];


    $VIN = $_REQUEST['VIN'];
    $make = $_REQUEST['make'];
    $model = $_REQUEST['model'];
    $year = $_REQUEST['year'];
    $color = $_REQUEST['color'];
    $mileage = $_REQUEST['mileage'];
    $price = $_REQUEST['price'];
    $customer_ID = 'NULL';

    $sql = "INSERT INTO `vehicles` VALUES ('" 
        . $VIN . 
        "', '" . $make . 
        "', '" . $model . 
        "', '" . $year . 
        "', '" . $color . 
        "', '" . $mileage .
        "','"  . $price .
        "', " . $customer_ID . ")";


    if ($conn->query($sql) === TRUE) {
        header("location: employee.php");
        echo "Car added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
?>

</body>
</html>