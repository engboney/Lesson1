
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <title>Login</title>
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
  width:600px;
  border-radius: 15px;
 }
 label{
  color:black;
 }
 input{
  padding-top: 8px;
  padding-bottom: 10px;
  margin-left: 10px;
  border-radius: 10px;
  border-color:maroon;
  width:150%;
  margin-top: 30px;
 }
 .sub{
  width: 20%;
  margin-top: 5%;
  margin-left: 40%;
 }
.mail{
  margin-left:8%;
  margin-top:10%;
}

  </style>
</head>
<body>
  <div class="container">
  <form action="login_session_connect.php" method="POST">
    <table>
      <thead align="right">LOGIN</thead>
      <tr>
        <td><label for="email">E Mail*</label></td>
        <td>    <input type="email" name="email"class="email" id="email"placeholder="E Mail"></td>
      </tr>
      <tr>
        <td><label for="Password">Password*:</label></td>
          <td> <input type="password"name="pass"id="pass"placeholder="Enter Password" ></td>
          
      </tr>
    </table>
    
    
    <input type="submit"name="submit"class="sub"id="submit"value="Login"> <br>
    </form>
  </div>
</body>
</html>