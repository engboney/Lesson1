<?php
if(isset($_POST['submit']))
$connector=mysqli_connect('localhost','root','','police_lost_items');

$card_no=mysqli_real_escape_string($connector,$_POST['card_no']);
$s_name=mysqli_real_escape_string($connector,$_POST['s_name']);
$o_names=mysqli_real_escape_string($connector,$_POST['o_names']);
$gender=mysqli_real_escape_string($connector,$_POST['gender']);
$nin=mysqli_real_escape_string($connector,$_POST['nin']);
$date_recieved=mysqli_real_escape_string($connector,$_POST['date_recieved']);
$station_card_recieved=mysqli_real_escape_string($connector,$_POST['station_card_recieved']);

$query="INSERT INTO details_of_found_card (card_no,s_name,o_names,gender,nin,date_recieved,station_card_recieved) 
VALUES('$card_no','$s_name','$o_names','$gender','$nin','$date_recieved','$station_card_recieved')";

$titus=mysqli_query($connector,$query);
if($titus){
  header("Location:found_card_register.php");
/*echo"YOU HAVE SUCCESSIFULLY REGISTERED A FOUND CARD";*/
}
else{
  echo"Record not saved Try again";
}
?>