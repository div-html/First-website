<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
<?php
$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "studentdb";
$port=3307;
$conn = new mysqli($servername, $username, $password, $dbname,$port);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Database Connected successfully";
?>
</body>
<html>
