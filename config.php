<?php
/* Credentials */
$servername = "localhost";
$db_username = "gprocick";
$db_password = "nbjmN71E";
$db_name = "gprocick";

// Create connection
$mysqli = new mysqli($servername, $db_username, $db_password, $db_name);

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
  }
?>