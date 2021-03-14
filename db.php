<?php
/*

 */
define('BASE_PATH','http://localhost/practice/');
define('DB_HOST', 'localhost');
define('DB_NAME', 'practice');
define('DB_USER','root');
define('DB_PASSWORD','colossus');

$con=mysqli_connect( DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
date_default_timezone_set('Africa/Lagos');
?>