<?php
include 'session.php';
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
      <a class="nav-item nav-link" href="./logout.php">Logout <?php echo '('. $login_session.')';?></a>
    </div>
  </div>
</nav>
 
<div class="container">
  <!-- This is the form that is used to create a new course, and sends a post request to insertCourse in order to be persisted in db-->
  <br>
  <h3>Add a new course</h3>
  <form action="insertCourse.php" method="POST">
  <div class="form-group">
      <label for="code"><b>Code:</b></label>
    <input type="text" class="form-control" name="code">
  </div>
  <div class="form-group">
    <label for="codeWithFoundation"><b>Code with Foundation:</b></label>
    <input type="text" class="form-control" name="codeWithFoundation">
  </div>
    <div class="form-group">
    <label for="durationFull"><b>Full Duration (Years):</b></label>
    <input type="number"  min="0" value="0" class="form-control" name="durationFull">
    </div>
    <div class="form-group">
    <label for="durationFullFoundation"><b>Full Duration with Foundation (Years):</b></label>
    <input type="number" min="0" value="0" class="form-control" name="durationFullFoundation">
    </div>
    <div class="form-group">
    <label for="durationPartMin"><b>Minimum Part Duration (Years):</b></label>
    <input type="number" min="0" value="0" class="form-control" name="durationPartMin">
    </div>
    <div class="form-group">
    <label for="durationPartMax"><b>Maximum Part Duration (Years):</b></label>
    <input type="number" min="0" value="0" class="form-control" name="durationPartMax">
    </div>
    <div class="form-group">
    <label for="startingPeriod"><b>Starting Period:</b></label>
    <input type="text" class="form-control" name="startingPeriod">
    </div>
    <div class="form-group">
    <label for="location"><b>Location:</b></label>
    <input type="text" class="form-control" name="location">
    </div>
    <div class="form-group">
    <label for="subjectDomain"><b>Subject Domain:</b></label>
    <input type="text" class="form-control" name="subjectDomain">
    </div>
    <div class="form-group">
    <label for="name"><b>Name:</b></label>
    <input type="text" class="form-control" name="name">
    </div>
    <div class="form-group">
    <label for="overview"><b>Overview:</b></label>
    <textarea class="form-control" name="overview"></textarea>
    </div>
   <div class="form-group">
    <label for="highlights"><b>Highlights:</b></label>
    <textarea class="form-control" name="highlights"></textarea>
    </div>
    <div class="form-group">
    <label for="courseDetails"><b>Course Details:</b></label>
    <textarea class="form-control" name="courseDetails"></textarea>
    </div>
     <div class="form-group">
    <label for="entryRequirements"><b>Entry Requirements:</b></label>
    <textarea class="form-control" name="entryRequirements"></textarea>
    </div>
    <div class="form-group">
    <label for="priceUkFull"><b>Price Uk Full:</b></label>
    <input type="number" min="0" value="0" class="form-control" name="priceUkFull">
    </div>
     <div class="form-group">
    <label for="priceUkPart"><b>Price Uk Part:</b></label>
    <input type="number" min="0" value="0" class="form-control" name="priceUkPart">
    </div>
     <div class="form-group">
    <label for="priceUkPartCreditModules"><b>Price Uk Part Credit Modules:</b></label>
    <input type="number" min="0" value="0" class="form-control" name="priceUkPartCreditModules">
    </div>
     <div class="form-group">
    <label for="priceUkIntegrated"><b>Price Uk Integrated:</b></label>
    <input type="number" min="0" value="0" class="form-control" name="priceUkIntegrated">
    </div>
     <div class="form-group">
    <label for="priceIntFull"><b>Price International Full:</b></label>
    <input type="number" min="0" value="0" class="form-control" name="priceIntFull">
    </div>
     <div class="form-group">
    <label for="priceIntIntegrated"><b>Price International Integrated:</b></label>
    <input type="number" min="0" value="0" class="form-control" name="priceIntIntegrated">
    </div>
    <div class="form-group">
      <div class="form-group">
    <label for="accreditation"><b>Accreditation:</b></label>
    <textarea class="form-control" name="accreditation"></textarea>
    </div>
    <div class="form-group">
    <label for="studentPerks"><b>Student Perks:</b></label>
    <textarea class="form-control" name="studentPerks"></textarea>
    </div>
    <div class="form-group">
    <label for="ify"><b>Ify:</b></label>
    <textarea class="form-control" name="ify"></textarea>
    </div>
   <div class="form-group">
    <label for="placements"><b>Placements:</b></label>
    <textarea class="form-control" name="placements"></textarea>
    </div>
    <div class="form-group">
    <label for="faqs"><b>FaQs:</b></label>
    <textarea class="form-control" name="faqs"></textarea>
    </div>
    <div class="form-group">
    <label for="imageUrl"><b>Image Url:</b></label>
    <input type="url" class="form-control" name="imageUrl">
    </div>
    <div class="checkbox">
        <label><input type="checkbox" name="undergraduate" checked="true"><b>Undergraduate:</b></label>
    </div>
        <br>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>        
</body>
</html>