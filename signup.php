
<?php
$conn=mysqli_connect("localhost","root","","signup");

	if(!$conn)
	{
		echo "Error!".mysqli_connect_error();
	}
	else
	{
		echo "";
	}
    echo "</br>";
$fname=$_POST["txt1"];
$lname=$_POST["txt2"];
$username=$_POST["txt3"];
$email=$_POST["txt4"];
$pass=$_POST["txt5"];
	$qry="insert into signupinfo(first_name,last_name,user_name,email,password) values('".$fname."','".$lname."','".$username."','".$email."','".$pass."')";

	$res=mysqli_query($conn,$qry);
	if($res!="")
	{
		echo "Successfully registered!";
	}
	else
	{
		echo "There was a problem creating that account!";
	}
?>
<html>
<head></head>
    <body><br><a href="home.htm">Click here to go to home page.</a></body>
</html>