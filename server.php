<?php 
session_start();
$username = "";
$email = "";
$errors = array();
//connect to the database
$db = mysqli_connect('localhost', 'root', '', 'practice');
// if the register button is clicked
if (isset($_POST['register'])){
    $username = mysql_real_escape_string($_POST['username']);
    $email = mysql_real_escape_string($_POST['email']);
    $password = mysql_real_escape_string($_POST['password']);
    $confirm_password = mysql_real_escape_string($_POST['confirm_password']);

    //ensure that form fields are filled properly
    if (empty($username)){
        array_push($errors, "Username is required");
    }
    if (empty($email)){
        array_push($errors, "Email is required");
    }
    if (empty($password)){
        array_push($errors, "Password is required");
    }
    if($password != $confirm_password){
        array_push($errors, "Passwords do not match");
    }
    // if there are no errors, save user to database
    if(count($errors)== 0){
        $password = md5($password); //encrypt password before storing into database
        $sql = "INSERT INTO users (username, email, password) 
                VALUES ('$username', '$email', '$password')";
       mysqli_query($db, $sql);
       $_SESSION['username'] = $username;
       $_SESSION['success'] = "You are now logged in";
       header('location: index.php'); //redirect to home page

    }
}

//log user in from login page
if(isset($_POST['login'])){
    $username = mysql_real_escape_string($_POST['username']);
       $password = mysql_real_escape_string($_POST['password']);

       //ensure that form fields are filled properly
       if (empty($username)){
        array_push($errors, "Username is required");
    }
    if (empty($password)){
        array_push($errors, "Password is required");
    
    }
    if(count($errors)==0){
        $password = md5($password); //encrypt password
        $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
        $result = mysqli_query($db, $query);
        if (mysqli_num_rows($result)== 1){
            //log user in
            $_SESSION['username'] = $username;
            $_SESSION['success'] = "You are now logged in";
            header('location: index.php');
        }else{
            array_push($errors, "wrong username/password combination");
            header('location: login.php');

        }
    }

}
//logout 
if (isset($_GET['logout'])){
    session_destroy();
    unset($_SESSION['username']);
    header('location: login.php');
}

?>