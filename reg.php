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
<h2>Register</h2>
</div>
<form method="POST" action = "reg.php">
    <!-- display validation error here-->
    <?php include('errors.php'); ?>
<div class="input-group">
<label for="username">Username</label>
<input type="text" name="username" value ="<?php echo $username; ?>">
</div>
<div class="input-group">
<label for="email">Email</label>
<input type="text" name="email" value ="<?php echo $email; ?>">
</div>
<div class="input-group">
<label for="Password">Password</label>
<input type="password" name="password">
</div>
<div class="input-group">
<label for="confirm_password">Confirm Password</label>
<input type="password" name="confirm_password">
</div>
<button type = "submit" name="register" class="btn">Register</button>
<p>Already a member? <a href="login.php">Login</a></p>
</form>
</div>
    
</body>
</html>