<?php

//Connect to the database
$servername = "localhost";
$username = "admin";
$password = "123";
$dbname = "csym019_assignment_2024";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

//Create php variables out of the AJAX post request
$code = $_POST['code'];
$codeWithFoundation = $_POST['codeWithFoundation'];
//Check that it is a boolean
$undergraduate = filter_var($_POST['undergraduate'], FILTER_VALIDATE_BOOLEAN);
$durationFull = $_POST['durationFull'];
$durationFullFoundation = $_POST['durationFullFoundation'];
$durationPartMin = $_POST['durationPartMin'];
$durationPartMax = $_POST['durationPartMax'];
$startingPeriod = $_POST['startingPeriod'];
$location = $_POST['location'];
$subjectDomain = $_POST['subjectDomain'];
$name = $_POST['name'];
$overview = $_POST['overview'];
$highlights = $_POST['highlights'];
$courseDetails = $_POST['courseDetails'];
$entryRequirements = $_POST['entryRequirements'];
$currency = "pound";
$priceUkFull = $_POST['priceUkFull'];
$priceUkPart = $_POST['priceUkPart'];
$priceUkPartCreditModules = $_POST['priceUkPartCreditModules'];
$priceUkIntegrated = $_POST['priceUkIntegrated'];
$priceIntFull = $_POST['priceIntFull'];
$priceIntIntegrated = $_POST['priceIntIntegrated'];
$accreditation = $_POST['accreditation'];
$studentPerks = $_POST['studentPerks'];
$ify = $_POST['ify'];
$placements = $_POST['placements'];
$faqs = $_POST['faqs'];
$imageUrl = $_POST['imageUrl'];


//Prepare the sql query to instert values in the Db
$sql = "INSERT INTO Courses (code, codeWithFoundation, undergraduate, durationFull,durationFullFoundation,durationPartMin,
                             durationPartMax,startingPeriod,location,subjectDomain,name,overview,highlights,courseDetails,
                             entryRequirements,currency,priceUkFull,priceUkPart,priceUkPartCreditModules,priceUkIntegrated,
                             priceIntFull,priceIntIntegrated,accreditation,studentPerks,ify,placements,faqs,imageUrl)
                             
                             
       VALUES ('".$code."', '".$codeWithFoundation."', '".$undergraduate."', '".$durationFull."',
               '".$durationFullFoundation."', '".$durationPartMin."', '".$durationPartMax."', '".$startingPeriod."',
               '".$location."', '".$subjectDomain."', '".$name."', '".$overview."',
               '".$highlights."', '".$courseDetails."', '".$entryRequirements."', '".$currency."',
               '".$priceUkFull."', '".$priceUkPart."', '".$priceUkPartCreditModules."', '".$priceUkIntegrated."',
               '".$priceIntFull."', '".$priceIntIntegrated."', '".$accreditation."', '".$studentPerks."',
               '".$ify."', '".$placements."', '".$faqs."', '".$imageUrl."'
               )";

echo $sql;
if ($conn->query($sql) === TRUE) {
    //If the addition is successfull, navigate to the homepage
    header('Location: courseSelectionForm.php');
} else {    echo "Error: " . $sql . "<br>" . $conn->error; } $conn->close(); 

