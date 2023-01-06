<?PHP
session_start();
?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Search Results</title>
  <style>
    body{
  background-color:rgb(255, 255, 128);
  font-family: Verdana, Geneva, Tahoma, sans-serif;
  font-size: medium;
  color:black;
  display: inline-block;
    }
    .container{
  background-color:aliceblue;
  margin-left: 400px;
  margin-top: 50px;
  margin-bottom: 50px;
  color:brown;
  height: 600px;
    }
    </style>
</head>
<body>
  <div class=container>
 
<?php
if(isset($_POST['search_4_id'])){
$conn=mysqli_connect('localhost','root','','police_lost_items');

$search=mysqli_real_escape_string($conn,$_POST['searchtxt']);
$query="SELECT * FROM  details_of_found_card WHERE s_name LIKE'%$search%' OR  nin LIKE'%$search%'OR o_names LIKE '%$search%'";

$both =mysqli_query($conn,$query);
$result=mysqli_num_rows($both);

if($result >0){
  echo'<h2>There are '.$result .'   '.$_POST['searchtxt'].'  found. <br></h2>' ;
  
}
else{

  echo'<h4 class=container>No Data Found</h4> </div>'; 
}

 
  while($row=mysqli_fetch_assoc($both)){
  echo'<table border=1>
  <thead>
  <tr>
  <td><h4>CARD NO</td></h4> 
  <td><h4>S_NAME</h4></td>
  <td><h4>OTHER NAMES</h4></td>
  <td><h4>GENDER</h4></td> 
  <td><h4>NIN</h4></td> 
  <td><h4>DATE CARD WAS RECIEVED</h4></td> 
  <td><h4>POLICE STATION</h4></td>
   </tr>
   </thead>
   ';
 
 
  echo'<tbody>
  <tr>
  <td>'.$row['card_no'].'</td><br>
  <td>'.$row['s_name'].'</td>
  <td>'.$row['o_names'].'</td>
  <td>'.$row['gender'].'</td>
  <td>'.$row['nin'].'</td>
  <td>'.$row['date_recieved'].'</td>
  <td>'.$row['station_card_recieved'].'</td>
  </tr> </body></table>'; 
}
   
}
?>

</div>
</body>
</html>


