<?php
 
//Start the session
  session_start();


  //Check for the credentials that were sent via AJAX Post
   if($_SERVER["REQUEST_METHOD"] == "POST") {
$email = $_POST['email'];
$password = $_POST['password'];
//calculate the hash
$hash = password_hash($password, PASSWORD_DEFAULT);

//Check the password and correlate that they are the same with hash
$hash = '$2y$10$rf0WIbwCzyMkiUyPEjfcIOBwwjeqANfGMFnPqjLC7t4w4PmStUqfa';
$passwordIsValid = password_verify( $password,$hash);

//If it succeeds, add to the global SESSION property the email as login user in order to know who is logined
if ($passwordIsValid) { 
        $_SESSION['login_user'] = $email;
       
        header('Location: courseSelectionForm.php');
} else {
    echo 'Invalid password.';
}
}
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

    </head>
    <body>
<div class="container" >
  <!-- Content here -->
  <br>
  <h4>Login</h4>
  <form action="" method="POST">
  <div class="form-group">
    <label for="email">Email:</label>
    <br>
    <input type="text" class="form-control" name="email">
  </div>
  <div class="form-group">
    <label for="password">Password:</label>
    <br>
    <input type="password" class="form-control" name="password">
  </div>
      <br>
      <button type="submit" class="btn btn-primary btn-md" >Login</button>
    </body>
</html>


