<?php



function createDbTables(){
$servername = "localhost";
$username = "admin";
$password = "csym019";
$dbname = "csym019_assignment_2024";    
$mysqli  = new mysqli($servername, $username, $password, $dbname);

//Check for connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

//Check if the users table exists. If no create
if ( !$mysqli -> query("SELECT  * FROM Users LIMIT 1")) {

    echo "creating";
    $sql = "CREATE TABLE Users (
            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
            email VARCHAR(30) NOT NULL,
            password VARCHAR(255) NOT NULL
            )";
    
  if ($mysqli->query($sql) === TRUE) {
   echo "Error creating table: " . $mysqli->error; } $mysqli->close();   
}

//Check if the courses tableexists. If no create
if ( !$mysqli -> query("SELECT  * FROM Courses LIMIT 1")) {

    echo "creating";
     $sql = "CREATE TABLE Courses (
            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
            code VARCHAR(30) ,
            codeWithFoundation VARCHAR(30) ,
            undergraduate BOOLEAN ,
            durationFull INT ,
            durationFullFoundation INT ,
            durationPartMin INT ,
            durationPartMax INT ,
            startingPeriod VARCHAR(30) ,
            location VARCHAR(30) ,
            subjectDomain VARCHAR(30) ,
            name VARCHAR(30) ,
            overview VARCHAR(1000) ,
            highlights VARCHAR(1000) ,
            courseDetails VARCHAR(1000) ,
            entryRequirements VARCHAR(1000) ,
            currency VARCHAR(30) ,
            priceUkFull DOUBLE ,
            priceUkPart DOUBLE ,
            priceUkPartCreditModules INT ,
            priceUkIntegrated DOUBLE  ,
            priceIntFull DOUBLE ,
            priceIntIntegrated DOUBLE ,
            accreditation VARCHAR(1000) ,
            studentPerks VARCHAR(1000) ,
            ify VARCHAR(1000) ,
            placements VARCHAR(1000) ,
            faqs VARCHAR(1000) ,
            imageUrl VARCHAR(1000) 
            )";
    
  if ($mysqli->query($sql) !== TRUE) {
    echo "Error creating table: " . $mysqli->error; } $mysqli->close();    
}


$mysqli -> close();
    
}


function getCourses(){
$servername = "localhost";
$username = "admin";
$password = "csym019";
$dbname = "csym019_assignment_2024";    
$mysqli = new mysqli($servername, $username, $password, $dbname);

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

$sql = "SELECT * FROM Courses";

$result = $mysqli->query($sql);
return $result;
}
?>