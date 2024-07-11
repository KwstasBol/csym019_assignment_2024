<?php

$servername = "localhost";
$username = "admin";
$password = "csym019";
$dbname = "csym019_assignment_2024";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 



$sql = "INSERT INTO Courses (code, codeWithFoundation, undergraduate, durationFull,durationFullFoundation,durationPartMin,
                             durationPartMax,startingPeriod,location,subjectDomain,name,overview,highlights,courseDetails,
                             entryRequirements,currency,priceUkFull,priceUkPart,priceUkPartCreditModules,priceUkIntegrated,
                             priceIntFull,priceIntIntegrated,accreditation,studentPerks,ify,placements,faqs,imageUrl)
                             
       VALUES ('".$_POST['code']."', '".$_POST['codeWithFoundation']."', '".$_POST['undergraduate']."', '".$_POST['durationFull']
                 .$_POST['durationFullFoundation']."', '".$_POST['durationPartMin']."', '".$_POST['durationPartMax']."', '".$_POST['startingPeriod']
                 .$_POST['location']."', '".$_POST['subjectDomain']."', '".$_POST['name']."', '".$_POST['overview']
                 .$_POST['highlights']."', '".$_POST['courseDetails']."', '".$_POST['entryRequirements']."', '".$_POST['currency']
                 .$_POST['priceUkFull']."', '".$_POST['priceUkPart']."', '".$_POST['priceUkPartCreditModules']."', '".$_POST['priceUkIntegrated']
                 .$_POST['priceIntFull']."', '".$_POST['priceIntIntegrated']."', '".$_POST['accreditation']."', '".$_POST['studentPerks']
                 .$_POST['ify']."', '".$_POST['placements']."', '".$_POST['faqs']."', '".$_POST['imageUrl']."')";

echo $sql;
if ($conn->query($sql) === TRUE) {
    //echo "New record created successfully";
    header('Location: courseSelectionForm.php');
} else {    echo "Error: " . $sql . "<br>" . $conn->error; } $conn->close(); 

