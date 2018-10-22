<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "upload";

// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "
<div class='alert alert-success'>
  <strong>Database Connected successfully</strong>
</div>";
?>