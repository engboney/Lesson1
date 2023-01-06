<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Welcome Page</title>
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
  border-radius:15px;
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
 .logclass{
margin-bottom:40px;
 }

  </style>
</head>
<div class="container">
<body><H3>Welcome to this Portal where you can 
  search for your lost Items</h3><br>
  <center><p>Please search for your lost Card by using either NIN or Names </p></center>
  <form action="search_connect.php"Method="POST">
    <input type="text" name="searchtxt" id="searchtxt"placeholder="search for your ID"required>
    <input type="submit"class="sub"name="search_4_id"value="SEARCH ID" onclick="return message()"><br><br>
    <a href="login.php">Login here</a> <br>
    

  </form>
  </div>
  
</body>
</html>