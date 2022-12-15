<html>
<link rel="stylesheet" href="https://bootswatch.com/5/flatly/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
<?php

$username = $password = $confirm_password = $usertype="";
$username_err = $password_err = $confirm_password_err = $usertype_err = "";

if ($_SERVER['REQUEST_METHOD'] == "POST"){

// Check for password
if(empty(trim($_POST['password']))){
    $password_err = "Password cannot be blank";
}
elseif(strlen(trim($_POST['password'])) < 5){
    $password_err = "Password cannot be less than 5 characters";
}
else{
    $password = trim($_POST['password']);
}

if(empty($_POST['usertype'])){
    $usertype_err = "Type cannot be blank";
}


if(trim($_POST['password']) !=  trim($_POST['confirm_password'])){
    $password_err = "Passwords should match";
}


if(empty($username_err) && empty($password_err) && empty($confirm_password_err) && empty($usertype_err))
{
    session_start();
    $_SESSION['username']=$username;
    $_SESSION['password']=$password;
    $_SESSION['usertype'] = $usertype;
    header('location:login.php');
}
}
?>
<div class="jumbotron" style="padding:70px">
<h1>Find an Internship</h1>
<br>
       
    Username: <input type="text" name="username">
    <br><br>
    Password: <input type="text" name="password">
    <br><br>
    Confirm password: <input type="text" name="confirm_password">
    <br><br>
    User type:
    <input type="radio" name="usertype" value="teacher">Teacher
    <input type="radio" name="usertype" value="student">Student
    <br><br>
    <input type="submit" name="submit" value="Submit" class="btn btn-lg btn-success">
</form>
</div>
</html>