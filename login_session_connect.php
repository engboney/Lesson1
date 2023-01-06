<?PHP
session_start();

$conn=mysqli_connect('localhost','root','','police_lost_items');

if(isset($_POST['submit'])){


$email=$_POST['email'];
$pass=$_POST['pass'];
if(empty($email))
{
  header("Location:login.php?erro=Email Address Required");
  exit();
}
else if(empty($pass))
{
  header("Location:login.php?erro=Password is a must");
  exit();
}


$select= "SELECT * FROM user_account WHERE email='$email' AND pass='$pass'";
$result=mysqli_query($conn,$select);

if(mysqli_num_rows($result)>0)
{
$data_in_arr=mysqli_fetch_assoc($result);
if($data_in_arr['email']===$email && $data_in_arr['pass']===$pass)
{
  echo"you are logged in as";

  $_SESSION['id']=$data_in_arr['id'];
 /* $_SESSION['account']=$data_in_arr['account'];*/
  /*$_SESSION['s_name']=$data_in_arr['s_name'];*/
  /*$_SESSION['other_names']=$data_in_arr['other_names'];*/
  $_SESSION['pass']=$data_arr['pass'];
 /* $_SESSION['confirm_pass']=$data_arr['confirm_pass'];*/
  $_SESSION['email']=$data_in_arr['email'];
  header("location:admin_page.php");
  exit();
}
/*else{
  header("Location:login.php?erro=incorrect username or password");
}*/
}
/*else{
  header("Location:login.php?erro=xxx");
  exit();
}*/
}
?>