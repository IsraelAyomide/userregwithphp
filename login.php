<?php include('server.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>User Registration</title>
</head>
<body>
<div class="header">
<h2>Login</h2>
</div>
<form method="post" action = "login.php">
    <!-- display validation error here-->
   <?php include('errors.php'); ?>
<div class="input-group">
<label for="username">Username</label>
<input type="text" name="username">
</div>
<div class="input-group">
<label for="Password">Password</label>
<input type="password" name="password">
</div>
<button type = "submit" name="login" class="btn">Login</button>
<p>Don't have an Account? <a href="reg.php">Register</a></p>
</form>
</body>
</html>