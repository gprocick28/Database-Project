<?php
/* Credentials */
$servername = "localhost";
$username = "gprocick";
$password = "nbjmN71E";
$dbname = "gprocick";

// Create connection
$mysqli = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
  }
?>