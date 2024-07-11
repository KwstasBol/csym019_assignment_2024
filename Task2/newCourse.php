<?php
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
        <script src="course.js"></script>

    </head>
    <body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Courses - Task 2</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link" href="./courseSelectionForm.php">Home </a>
      <a class="nav-item nav-link active" href="#"><u>Add Courses</u></a>
      <a class="nav-item nav-link" href="./courseReport.php">Create Report</a>
    </div>
  </div>
</nav>
 
<div class="container">
  <!-- Content here -->
  <br>
  <h3>Add a new course</h3>
  <form action="insertCourse.php" method="POST">
  <div class="form-group">
    <label for="code">Code:</label>
    <input type="text" class="form-control" name="code">
  </div>
  <div class="form-group">
    <label for="codeWithFoundation">Code with Foundation:</label>
    <input type="text" class="form-control" name="codeWithFoundation">
  </div>
    <div class="form-group">
    <label for="durationFull">Full Duration (Years):</label>
    <input type="number"  min="0" value="0" class="form-control" name="durationFull">
    </div>
    <div class="form-group">
    <label for="durationFullFoundation">Full Duration with Foundation (Years):</label>
    <input type="text" class="form-control" name="durationFullFoundation">
    </div>
    <div class="form-group">
    <label for="durationPartMin">Minimum Part Duration (Years):</label>
    <input type="text" class="form-control" name="durationPartMin">
    </div>
    <div class="form-group">
    <label for="durationPartMax">Maximum Part Duration (Years):</label>
    <input type="text" class="form-control" name="durationPartMax">
    </div>
    <div class="form-group">
    <label for="startingPeriod">Starting Period:</label>
    <input type="text" class="form-control" name="startingPeriod">
    </div>
    <div class="form-group">
    <label for="location">Location:</label>
    <input type="text" class="form-control" name="location">
    </div>
    <div class="form-group">
    <label for="subjectDomain">Subject Domain:</label>
    <input type="text" class="form-control" name="subjectDomain">
    </div>
    <div class="form-group">
    <label for="name">Name:</label>
    <input type="text" class="form-control" name="name">
    </div>
    <div class="form-group">
    <label for="overview">Overview:</label>
    <textarea class="form-control" name="overview"></textarea>
    </div>
   <div class="form-group">
    <label for="highlights">Highlights:</label>
    <textarea class="form-control" name="highlights"></textarea>
    </div>
    <div class="form-group">
    <label for="courseDetails">Course Details:</label>
    <textarea class="form-control" name="courseDetails"></textarea>
    </div>
     <div class="form-group">
    <label for="entryRequirements">Entry Requirements:</label>
    <textarea class="form-control" name="entryRequirements"></textarea>
    </div>
    <div class="form-group">
    <label for="priceUkFull">Price Uk Full:</label>
    <input type="number" min="0" value="0" class="form-control" name="priceUkFull">
    </div>
     <div class="form-group">
    <label for="priceUkPart">Price Uk Part:</label>
    <input type="number" min="0" value="0" class="form-control" name="priceUkPart">
    </div>
     <div class="form-group">
    <label for="priceUkPartCreditModules">Price Uk Part Credit Modules:</label>
    <input type="number" min="0" value="0" class="form-control" name="priceUkPartCreditModules">
    </div>
     <div class="form-group">
    <label for="priceUkIntegrated">Price Uk Integrated:</label>
    <input type="number" min="0" value="0" class="form-control" name="priceUkIntegrated">
    </div>
     <div class="form-group">
    <label for="priceIntFull">Price International Full:</label>
    <input type="number" min="0" value="0" class="form-control" name="priceIntFull">
    </div>
     <div class="form-group">
    <label for="priceIntIntegrated">Price International Integrated:</label>
    <input type="number" min="0" value="0" class="form-control" name="priceIntIntegrated">
    </div>
    <div class="form-group">
      <div class="form-group">
    <label for="accreditation">Accreditation:</label>
    <textarea class="form-control" name="accreditation"></textarea>
    </div>
    <div class="form-group">
    <label for="studentPerks">Student Perks:</label>
    <textarea class="form-control" name="studentPerks"></textarea>
    </div>
    <div class="form-group">
    <label for="ify">Ify:</label>
    <textarea class="form-control" name="ify"></textarea>
    </div>
   <div class="form-group">
    <label for="placements">Placements:</label>
    <textarea class="form-control" name="placements"></textarea>
    </div>
    <div class="form-group">
    <label for="faqs">FaQs:</label>
    <textarea class="form-control" name="faqs"></textarea>
    </div>
    <div class="form-group">
    <label for="imageUrl">Image Url:</label>
    <input type="url" class="form-control" name="imageUrl">
    </div>
    <div class="checkbox">
        <label><input type="checkbox" name="undergraduate" checked="true">Undergraduate</label>
    </div>
        <br>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>        
</body>
</html>