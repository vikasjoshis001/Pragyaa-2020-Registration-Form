<?php
session_start();

include 'database.php';

$uname=$_POST['uname'];
$password=$_POST['psw'];
$password=md5($password);

if(!$con)
{
echo -2;
exit();
}

// verify username and password in databse
$sql="select * from users where email='$uname' and password='$password'";
$result=mysqli_query($con,$sql);
if(!$result)
{
echo -1;
exit();
}
$num=mysqli_num_rows($result);
if($num ==0)
{
echo 1;
exit();
}
else
{
$_SESSION['uname']=$uname;
$_SESSION['password']=$password;
echo 0;
exit();
}
// verify username and password in databse
?>