<?php
if(isset($_POST['submit'])){
$conn=mysqli_connect('localhost','root','','police_lost_items');

$account=mysqli_real_escape_string($conn,$_POST['account']);
$s_name=mysqli_real_escape_string($conn,$_POST['s_name']);
$other_names=mysqli_real_escape_string($conn,$_POST['other_names']);
$pass=$_POST['pass'];
$confirm_pass=$_POST['confirm_pass'];
$email=mysqli_real_escape_string($conn,$_POST['email']);

$select="SELECT * FROM user_account WHERE email='$email' AND  pass='$pass'";
$result=mysqli_query($conn,$select);

if(mysqli_num_rows($result)>0){
echo "USer Acoount Already Exist";
}
elseif ($pass !=$confirm_pass){
 
    echo"Password not matching";
  }
  else{
  $data="INSERT INTO user_account(account,s_name,other_names,pass,confirm_pass,email)VALUES('$account','$s_name','$other_names','$pass','$confirm_pass','$email')";

  $myresult=mysqli_query($conn,$data);
  
  if($myresult){
    echo"Your User Account has been Created";
    /*header("Location: logiin.php?record save=success");*/
  
  }
  else{
    echo"SORRY YOU STILL HAVE AN ERROR";
  }
}
}
?>
