<?php
$servername = "localhost";
$username = "root";
$password = "";
$nbd = "brief_4";

// Create connection
// $conn = new mysqli($servername, $username, $password, $nbd);
try {
    $con = new PDO("mysql:host=$servername;dbname=brief_4", $username, $password);
    // echo "Connected successfully";
  } catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    die();
  }
?>