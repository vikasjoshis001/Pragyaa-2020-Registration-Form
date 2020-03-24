<?php
session_start();

include 'database.php';

$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$email=$_POST['email'];
$password=$_POST['psw'];
$password=md5($password);

if(!$con)
{
echo -2;
exit();
}

// check if user already exists
$sql="select * from users where email='$email'";
$result=mysqli_query($con,$sql);
if(!$result)
{
echo -1;
exit();
}
$num=mysqli_num_rows($result);
if($num!=0)
{
echo 1;
exit();
}
// check if user already exists

// insert data into database
$sql="insert into users(first_name,last_name,email,password) values('$first_name','$last_name','$email','$password')";
$result=mysqli_query($con,$sql);
if(!$result)
{
echo -1;
exit();
}
else
{
echo 0;
}
// insert data into database
?>