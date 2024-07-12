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
      <a class="nav-item nav-link" href="./courseSelectionForm.php">Home</a>
      <a class="nav-item nav-link" href="./newCourse.php">Add Courses</a>
      <a class="nav-item nav-link active" href="#"><u>Create Report</u></a>
      <a class="nav-item nav-link" href="./logout.php">Logout <?php echo '('. $login_session.')';?></a>
    </div>
  </div>
</nav>      
        <hr>
    </body>
</html>