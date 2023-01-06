<?php
session_start();
echo'<h3><center> signed in as'.'  '.$_SESSION['email'].'</center>';
echo"<center><a href='logout.php'> Sign Out</a> </center>";
?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register found Item</title>
  <style>
    body{
  background-color: rgb(255, 255, 128);
  font-family: Verdana, Geneva, Tahoma, sans-serif;
  font-size: medium;
  color:black;
  display:flex;
}
.container{
  background-color:aliceblue;
  margin-left: 400px;
  margin-top: 50px;
  margin-bottom: 50px;
  color:brown;
  border-radius: 15px;
 }
 label{
  color:black;
  margin-left: 20px;
 }


 .place{
  margin-left: 10%;
 }
 .sub_c{
  margin-left: 5%;
 }
 .link{
  margin-bottom: 20%;
  margin-left:5%;
  border-color:brown;
  background-color:beige;
 }
 input{
  padding-top: 8px;
  padding-bottom: 10px;
  margin-left: 50px;
  border-radius: 10px;
  border-color:maroon;
  width:130%;
 }
 .sub{
  width: 20%;
  margin-top: 5%;
  margin-left: 40%;
 }
 select{
  margin-left: 10px;
  border-radius: 10px;
  border-width:2px;
  border-color:maroon;
  width:68%;
  padding-top: 8px;
  padding-bottom: 10px;

 }

  </style>
</head>
<body>
  <div class=container>
  <h1>WELCOME TO UGANDA POLICE PORTAL </h1>
  
  <H2>Please register the found cards in here.</H2>
  <form action="register_connect.php"method="POST">
  <table>
    <thead> 
      <tr>
        <td>
        <label for="card_no">Card No:</label>
        </td>
        <td><input type="text" name="card_no" id="card_no"required><br><br></td>
        <tr>
        <td><label for="s_name">Sur Name</label> 
        </td> 
        <td>
        <input type="text" name="s_name" id="s_name"required><br><br>
        </td></tr>
        <tr>
        <td><label for="Othername">Other NAme</label> 
        </td><td><input type="text" name="o_names" id="s_name"><br><br>
        </td></tr>
        <tr>
          <td><label for="gender">Gender</label></td>
          <td> <input type="text" name="gender" id="gender"required><br><br></td>
        </tr>
        <tr><td> <label for="nin">NIN</label>
        <td><input type="text" name="nin" id="nin"required><br><br></td>
        </td></tr>
        <tr>
          <td>
          <label for="date_recieved">Date the card was recieved</label>
          </td>
          <td><input type="date" name="date_recieved" id="date_recieved"required></td>
        </tr>
      </tr>

      <tr>
          <td>
          <label for="station_card_recieved">Station Card was recieved</label>
          </td>
          <td><input type="text" name="station_card_recieved" id="station_card_recieved"required></td>
        </tr>
      </tr>

   
  </table>
  
   
    
    <input type="submit" name="submit"class="sub"id="submit">
  </form>
  
  <div class=link>
  
  </div>
  </div>

  </thead>
</body>
</html>