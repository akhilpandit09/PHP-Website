<?php

$servername = "localhost"; 
$username = "root";
$password = ""; 
$database = "phpwebsite"; 

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$username = $_POST['user'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$comment = $_POST['comment'];

// Prepare SQL statement to insert data into the table
$sql = "INSERT INTO userinfodata (user, email, mobile, comment) VALUES ('$username', '$email', '$mobile', '$comment')";

// Execute SQL statement
if ($conn->query($sql) === TRUE) {
    // echo "New record created successfully";
    header('location:index.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close database connection
$conn->close();
?>
