<?php
session_start();

include 'database.php';

$department=$_GET['dept'];

if(!$con)
{
echo -2;
exit();
}

// fetch events
$sql="select * from Departmental_Events where department='$department'";
$result=mysqli_query($con,$sql);
if(!$result)
{
echo -1;
exit();
}

//json encode all events 
$num=mysqli_num_rows($result);
$data=array();
for ($i=0;$i<$num;$i++)
{
$data[$i]=mysqli_fetch_array($result);
}
echo json_encode($data);
?>