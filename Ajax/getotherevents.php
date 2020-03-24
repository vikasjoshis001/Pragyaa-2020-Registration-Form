<?php
session_start();

include 'database.php';

$event_type=$_GET['event_type'];
if(!$con)
{
echo -2;
exit();
}
switch ($event_type) {
case "Creative Event":
$event_type="Creative_Events";
break;
case "Online Event":
$event_type="Online_Events";
break;
case "Robotics Event":
$event_type="Robotics";
break;
case "Gaming Zone":
$event_type="Gaming_Zone";
break;
case "Exhibition":
$event_type="Exhibation";
break;
}

// fetch events
$sql="select * from $event_type";
$result=mysqli_query($con,$sql);
if(!$result)
{
echo -1;
exit();
}

// json encode all events
$num=mysqli_num_rows($result);
$data=array();
for ($i=0;$i<$num;$i++)
{
$data[$i]=mysqli_fetch_array($result);
}
echo json_encode($data);
?>