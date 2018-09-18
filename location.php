<?php 
 session_start(); 
  unset($_SESSION["auth"]);
  unset($_SESSION["name_rol"]);
   unset($_SESSION["rol1"]);
  header('location:index.php');
?>