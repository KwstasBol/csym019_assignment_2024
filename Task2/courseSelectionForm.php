
<?php

//include the following php files in order to have the session and also the functions file
include 'dbFunctions.php';
include 'session.php';
//Create database tables only if they do not exist
createDbTables();

//Get courses from sql
$coursesSqlRes = getCourses();
?>
 <!DOCTYPE html>


 
<html>
    <head>
        <title>TASK 2</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="courseSelectionForm.css"/>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
       <script src="https://cdn.jsdelivr.net/npm/djv@2.1.4/djv.min.js"></script>
        <script src="courseSelectionForm.js"></script>
    </head>
    <body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Courses - Task 2</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
        <a class="nav-item nav-link active" href="#"><u>Home</u></a>
      <a class="nav-item nav-link" href="./newCourse.php">Add Courses</a>
      <a class="nav-item nav-link" href="./courseReport.php">Create Report</a>
      <a class="nav-item nav-link" href="./logout.php">Logout <?php echo '('. $login_session.')';?></a>
      
    </div>
  </div>
</nav>

        <br>
        <hr>
        <!-- the button to delete the courses -->
             <button class="btn btn-danger btn-sm" onclick="deleteSelectedCourses()">Delete</button></tr>
    
      <!-- the table of the courses that is populated with php code -->
        <table  id ="coursesTable" class="table table-hover table-bordered" >

            <tr> 
                <th><input type="checkbox"  name="select" id="toggleAllCheckbox" onclick="toggleCheckboxes()"></th>
                <th>Id</th>
                <th>ImageUrl</th>
                <th>Name</th>
                <th>Overview</th>
                <th>Highlights</th>
                <th>Course Details</th>
                <th>Entry Requirements</th>
                <th>Ucas Code</th> 
                <th>Ucas Code with Foundation</th> 
                <th>Full Price UK</th>
                <th>Part Price UK</th>
                <th>Credit Modules</th>
                <th>Integrated Price UK</th>
                <th>International Full Price</th>
                <th>International Integrated Price</th>
                <th>Full Duration</th>
                <th>Full Duration with Foundation</th>
                <th>Minimum Part Duration</th>
                <th>Maximum Part Duration</th>
                <th>Starting</th>
                <th>Location</th>   
                <th>Subject Domain</th>
                <th>Undergraduate</th>
                <th>Accreditation</th>
                <th>Student Perks</th>
                <th>Ify</th>
                <th>Placements</th>
                <th>FaQs</th>            
            </tr> 
            
              <!-- traverse the list out of the php fetch result and for every item, create a tr with a td field for every course property-->
            <?php 
            while($row = $coursesSqlRes->fetch_assoc()) {?>
                <tr>
                      <!-- create a class with name 'checkbox_{id}' in order to know what to delete afterwards -->
                    <td><input class="tdCheckbox" id=<?php echo 'checkbox_'.$row['id'] ?> type="checkbox" name="select"></td> 
                    <td><?php echo $row['id']?></td>
                    <td><img class="img-thumbnail" src="<?php echo $row['imageUrl']?>"></td> 
                    <td><?php echo $row['name']?></td>
                    <td><?php echo $row['overview']?></td>
                    <td><?php echo $row['highlights']?></td>
                    <td><?php echo $row['courseDetails']?></td>
                    <td><?php echo $row['entryRequirements']?></td>
                    <td><?php echo $row['code']?></td>                    
                    <td><?php echo $row['codeWithFoundation']?></td>
                    <td><?php echo $row['priceUkFull']?></td>
                    <td><?php echo $row['priceUkPart']?></td>
                    <td><?php echo $row['priceUkPartCreditModules']?></td>
                    <td><?php echo $row['priceUkIntegrated']?></td>
                    <td><?php echo $row['priceIntFull']?></td>
                    <td><?php echo $row['priceIntIntegrated']?></td>
                    <td><?php echo $row['durationFull']?></td>
                    <td><?php echo $row['durationFullFoundation']?></td>
                    <td><?php echo $row['durationPartMin']?></td>
                    <td><?php echo $row['durationPartMax']?></td>
                    <td><?php echo $row['startingPeriod']?></td>
                    <td><?php echo $row['location']?></td>
                    <td><?php echo $row['subjectDomain']?></td>
                    <td><?php echo $row['undergraduate']?></td>
                    <td><?php echo $row['accreditation']?></td>
                    <td><?php echo $row['studentPerks']?></td>
                    <td><?php echo $row['ify']?></td>
                    <td><?php echo $row['placements']?></td>
                    <td><?php echo $row['faqs']?></td>
                      
                <tr> 
             <?php
            }
            ?>
        </table>
        

    </body>
</html>