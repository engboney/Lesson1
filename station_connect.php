<?php
include 'code_to_connect_to_db.php';

$station_name=mysqli_real_escape_string($conn,$_POST['station_name']);
$district=mysqli_real_escape_string($conn,$_POST['district']);
$county=mysqli_real_escape_string($conn,$_POST['county']);
$sub_county=mysqli_real_escape_string($conn,$_POST['sub_county']);
$parish	=mysqli_real_escape_string($conn,$_POST['parish']);
$village=mysqli_real_escape_string($conn,$_POST['village']);

$query_to_table="INSERT INTO police_stations (station_name,district,county,sub_county,parish,village)
VALUES('$station_name','$district','$county','$sub_county','$parish','$village')";
$call_both_querys=mysqli_query($conn,$query_to_table);
if($call_both_querys){
  header("Location:station.php?station Registered "); 
}
else{
  echo'Record not Saved';
}

?>