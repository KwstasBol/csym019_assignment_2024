
<?php

   // Begin the session
   session_start();
   
 echo "<script>console.log('ok' );</script>";
   //If there is not a logined user navigate to login.
   if(!isset($_SESSION['login_user'])){
      header("location: login.php");
      die();
   }
   $login_session = $_SESSION['login_user'];
?>