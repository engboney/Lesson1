<?php
session_start();
echo'<h3><center> Signed in as:'.'  '.$_SESSION['email'].'</center>';
echo"<center><a href='logout.php'> Sign Out</a> </center>";
?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register Police Station</title>
  <style>
    
body{
  background-color: rgb(255, 255, 128);
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
  width: 100%;
 }
 label{
  color:black;
  margin-left: 20px;
 }

 /*.place{
  margin-left: 10%;
 }
 /*.sub_c{
  margin-left: 5%;
 }*/
 input{
  padding-top: 8px;
  padding-bottom: 10px;
  margin-left: 100px;
  border-radius: 10px;
  border-color:maroon;
  width:130%;
 }
 .sub{
  width: 20%;
  margin-top: 5%;
  margin-left: 40%;
  margin-bottom: 5%;
 }
 select{
  margin-left: 100px;
  border-radius: 10px;
  border-width:2px;
  border-color:maroon;
  width:130%;
  padding-top: 8px;
  padding-bottom: 10px;

 }
 
 .info{
  margin-top:100%;
 }

  </style>
  
</head>

<body>
  <div class="container">
    <Span class="info"><h3>Police Stations Register</h3></Span>
    <form action="station_connect.php" method="POST">
      <br>
      <table>
       <tr>
        <td>
        <label for="station_name">Station Name</label>
        </td>
        <td>
        <input type="text" name="station_name" id="station_name" required><br><br>
        </td>
       </tr>
       <tr>
        <td>
        <label for="district">District</label>
        </td>
        <td>
        <select name="district" class="place" id="district" required>
        <option value="" selected>Select District</option>
        <option value="Ntungamo">Ntungamo</option>
        <option value="Kazo">Kazo</option>
        <option value="Kiruhura">Kiruhura</option>
        <option value="Mbararara">Mbararara</option>
      </select><br><br>
        </td>
       </tr>
       <tr>
        <td>
        <label for="County">County</label>
        </td>
        <td>
        <select name="county" class="place" id="county">
        <option value="" selected>Select County</option>
        <option value="Nakawa">Nakawa</option>
        <option value="Kawempe">Kawempe</option>
        <option value="Makidye">Makindye</option>
        <option value="Ntinda">Ntinda</option>
      </select><br><br>
     
        </td>
       </tr>
       <tr>
        <td>
        <label for="sub_county">Sub County</label>
        </td>
        <td>
        <select name="sub_county"class="sub_c" id="sub_county">
        <option value="" selected>Select Sub County</option>
      </select><br><br>
        </td>
       </tr>
       <tr>
        <td>
        <label for="parish">Parish</label>
        </td>
        <td>
        <select name="parish" class="place"id="parish">
        <option value="" selected>Select Parish</option>
      </select><br><br>  
        </td>
       </tr>
       <tr>
        <td>
        <label for="village">Village</label>
        </td>
        <td>
        <select name="village" class="place"id="parish">
        <option value="" selected>Select Village</option>
      </select><br><br> 
        </td>
       </tr>
      </table>
     
      <input type="submit" class="sub" name="submit" id="submit" value="Save a Station">

    </form>
  </div>

</body>

</html>