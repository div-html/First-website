<?php

$name = $password = "";
$success = false;


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "practice";
$port = 3307;

$conn = new mysqli($servername, $username, $password, $dbname, $port);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $name = trim($_POST["fullname"]);
    $password = trim($_POST["pass"]);
    
    

    $stmt = $conn->prepare("INSERT INTO users (fullname, password) VALUES (?, ?)");
    
    
    if ($stmt === false) {
        die("Prepare failed: " . $conn->error);
    }
    
    
    $stmt->bind_param("ss", $param_name, $param_password);
    

    $param_name = $name;
    $param_password = password_hash($password, PASSWORD_DEFAULT);

    
    if ($stmt->execute()) {
        $success = true; 
        
        
        echo "<script>";
        echo 'alert("Success! Your data has been stored");';
        echo '</script>';
        
    } else {
       
        echo "Error executing query: " . $stmt->error;
    }
    
   
    $stmt->close();
}


$conn->close();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 

    if ($success) {
        echo "<p style='color: green;'>Data inserted and connection closed.</p>";
    } else {
        echo "<p style='color: gray;'>Awaiting form submission...</p>";
    }
    ?>
    <a href="http://localhost/Php/domain/getPost.php#">Go back?</a>
</body>
</html>