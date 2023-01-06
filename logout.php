<?php
session_start();
if(isset($_SESSION['email'])){
  session_unset();
  session_destroy();
  header("location:login.php");
  /*echo"<script>Location.href='login.php' </script>";*/
}
else{
  header("Location:search_lost_id.php");
  /*echo"<script>Location.href='search_lost_id.php'";*/
}
?>