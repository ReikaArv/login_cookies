<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cookies_test";

// Create connection
$dbconn = new mysqli($servername, $username, $password,$dbname);
// Check connection
if ($dbconn->connect_error) {
    die("Connection failed: " . $dbconn->connect_error);
  }
  echo "Connect successfully";
?>
