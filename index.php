<?php
include_once("login.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="login.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login System</title>
</head>
<body>
    <div class="background">
  <div class="header">
    <h1>Sign Up</h1>

  </div>
  <div class="container">
     <form action="signup.php" method="GET">
      <input type="text" placeholder="Username" name="username"><br>
      <input type="email" placeholder="E-mail"  autocomplete="off" name="email"><br>
      <input type="password" placeholder="password" autocomplete="off" name="password"><br>
<button type="submit">Submit</button>
  </div>
</form>

</body>
</html>