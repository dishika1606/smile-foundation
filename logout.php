<?php
   session_start();
   unset($_SESSION["username"]);
   unset($_SESSION["password"]);
   
   echo 'Redirecting to Home Page...';
   header('Refresh: 2; URL = index.php');
?>