
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>create an account</title>
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
  margin-top: 20px;
  padding-top: 8px;
  padding-bottom: 10px;
  margin-left: 25px;
  border-radius: 10px;
  border-color:maroon;
  width:70%;
 }
 select{
  margin-top: 20px;
  padding-top: 8px;
  padding-bottom: 10px;
  margin-left: 25px;
  border-radius: 10px;
  border-color:maroon;
  width:70%;
 }
 .admin{
  margin-left:1px;
 }
 .front{
  margin-left: 2px;
 }
  </style>
</head>
<body>
  <div class="container">
  <form action="create_account_link.php"method="POST">
  <select name="account" id="account">
  <option value="">Select Account type</option>
  <option value="Admin">Admin</option>
  <option value="Front Desk">Front Desk</option>
  </select>
    <!--<legend>Choose User Acoount type</legend>
    <label for="front_desk">Front Desk </label>
  <input type="radio"class="front"name="account"Value="Front "><br>
  <label for="admin_account">Admin Account</label>
  <input type="radio"class="admin" name="account"value="Admin">-->
  
  <br><br>

  <input type="text"name="s_name"id="s_name" placeholder="Sur Name"required><br><br>
  <input type="text" name="other_names" id="other_names" placeholder="Other Names"required><br><br>
  <input type="password" name="pass" id="pass"placeholder="prefered Password"required><br><br>
  <input type="password" name="confirm_pass" id="confirm_pass"placeholder="Confirm Password"required><br><br>
  <input type="mail" name="email" id="email"placeholder="E Mail"required><br><br>
  
  <input type="submit" name="submit" id="submit"value="Create Account">
  </form>
  <a href="login.php">Login here</a> <br>
  </div>
</body>
</html>