<?php
if(isset($_POST['submit']));
$conn=mysqli_connect('localhost','root','','police_lost_items');
$force_number=mysqli_real_escape_string($conn,$_POST['force_number']);
$s_name=mysqli_real_escape_string($conn,$_POST['s_name']);
$o_names=mysqli_real_escape_string($onn,$_POST['o_names']);
$contact=mysqli_real_escape_string($conn,$_POST['contact']);
$query= "INSERT INTO police_officer (force_number,s_name,o_names,contact)VALUES('$force_number','$s_name','$o_names','$contact')";
$k=mysqli_query($conn,$query);
if($k){
    echo'record saved';
}
   else {
    echo'You have an error in your code';
  }


?>