<?php
$connection=mysqli_connect("localhost","root","","signup");
if (!$connection){
    die("Database Connection Failed" . mysqli_error($connection));
}
$select_db = mysqli_select_db($connection, 'signup');
if (!$select_db){
    die("Database Selection Failed" . mysqli_error($connection));
}
session_start();
if (isset($_POST['txt1']) and isset($_POST['txt2'])){
$username = $_POST['txt1'];
$pass = $_POST['txt2'];
$query = "SELECT * FROM signupinfo WHERE user_name='$username' and password='$pass'";
$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
$count = mysqli_num_rows($result);
if ($count == 1){
$_SESSION['user_name'] = $username;
     header("location: user_profile.php");
}else{
echo"Invalid Login Credentials.";
}
}
if (isset($_SESSION['user_name'])){
$username = $_SESSION['user_name'];
}
?>