<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Search Lost ID</title>
  <style>
    body{
  background-color: rgb(255, 255, 128);
  font-family: Verdana, Geneva, Tahoma, sans-serif;
  font-size: medium;
  color:black;
  display: flex;
}
.container{
  background-color:aliceblue;
  margin-left: 400px;
  margin-top: 50px;
  margin-bottom: 50px;
  color:brown;
  height: 600px;
 }
 input{
  padding-top: 8px;
  padding-bottom: 10px;
  margin-left: 10px;
  margin-top: 170px;
  border-radius: 10px;
  border-color:maroon;
  width:70%;
 }
 .sub{
  padding-top: 8px;
  padding-bottom: 10px;
  margin-left: 10px;
  margin-top: 5px;
  border-radius: 10px;
  border-color:maroon;
  width:70%;
 }
 
  </style>
</head>
<div class="container">
<body><P>Please search for the lost Card by using either NIN or Names </p>
  <form action="search_connect.php"Method="POST">
    <input type="text" name="searchtxt" id="searchtxt"placeholder="search for your ID"required>
    <input type="submit"class="sub"name="search_4_id"value="SEARCH ID" onclick="return message()">

  </form>
  </div>
  
</body>
</html>