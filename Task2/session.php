
<?php
//The session configuration code, which checks if a user is logined and has created a session, so he can use any resource of the application
   // Begin the session
   session_start();
   
   //If there is not a logined user navigate to login.
   if(!isset($_SESSION['login_user'])){
      header("location: login.php");
      die();
   }
   $login_session = $_SESSION['login_user'];
?>