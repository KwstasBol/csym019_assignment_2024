<?php
   session_start();

   //Destroy the session, in other words logout the login_user (removes from the global variable)
   if(session_destroy()) {
      header("Location: login.php");
   }