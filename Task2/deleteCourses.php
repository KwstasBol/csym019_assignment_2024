<?php

$servername = "localhost";
$username = "admin";
$password = "csym019";
$dbname = "csym019_assignment_2024";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$ids = $_GET['ids'];
echo 'aaaaaaa'.$ids;

$sql = "DELETE FROM Courses WHERE id IN ($ids)";
if ($conn->query($sql) === TRUE) {
    //echo "New record created successfully";
    //header('Location: courseSelectionForm.php');
} else {    echo "Error: " . $sql . "<br>" . $conn->error; } $conn->close(); 
