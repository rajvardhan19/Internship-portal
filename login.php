<html>
<link rel="stylesheet" href="https://bootswatch.com/5/flatly/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
<?php
session_start();
$username = $password = "";
$err = "";
$usertype = "";
if ($_SERVER['REQUEST_METHOD'] == "POST"){
    if(empty(trim($_POST['username'])) || empty(trim($_POST['password'])))
    {
        $err = "Please enter username + password";
    }
    else{
        $username = trim($_POST['username']);
        $password = trim($_POST['password']);
    }
if(empty($err))
    {
        $usertype=$_SESSION['usertype'];
        if($password==$_SESSION['password']){
            header('location:index.php');
        }
    } 
}   
?>
<div class="jumbotron" style="padding:70px">
    <h1>Find an Internship</h1>
    <br>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Username: <input type="text" name="username">
    <br><br>
    Password: <input type="text" name="password">
    <br><br>
    <input type="submit" name="submit" value="Submit" class="btn btn-lg btn-success">
</form>
</div>
</html>