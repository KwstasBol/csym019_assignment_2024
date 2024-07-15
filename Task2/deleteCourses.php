<?php
//Connect to the dataqbase
$servername = "localhost";
$username = "admin";
$password = "123";
$dbname = "csym019_assignment_2024";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

//Build the query that searches in multiple ids, which is an array that was received via the ajax request
$ids = $_GET['ids'];

//Delete courses
$sql = "DELETE FROM Courses WHERE id IN ($ids)";
if ($conn->query($sql) === TRUE) {
    //echo "New record created successfully";
    //header('Location: courseSelectionForm.php');
} else {    echo "Error: " . $sql . "<br>" . $conn->error; } $conn->close(); 
