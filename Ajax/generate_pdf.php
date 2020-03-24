<?php
session_start();

include 'database.php';

$player_type=$_POST['p_player_type'];
$event_type=$_POST['p_event_type'];
$department=$_POST['p_event_department'];
$password=$_POST['p_psw'];
$event=$_POST['p_event'];
$uname=$_SESSION['uname'];
$password=md5($password);

if(!$con)
{
echo -2;
exit();
}

// verify login password
$sql="select * from users where email='$uname' and password='$password'";
$result=mysqli_query($con,$sql);
if(!$result)
{
echo -1;
exit();
}
$num=mysqli_num_rows($result);
if($num==0)
{
echo 2;
exit();
}
// verify login password

$heading=array();
if($player_type=='solo')
{
$heading[0]='First Name';
$heading[1]='Last Name';
$heading[2]='Email';
$heading[3]='Mobile';
$heading[4]='College';
$heading[5]='Registered by';
$heading[6]='Date Time';
}
else
{
$heading[0]='Team Name';
$heading[1]='Email';
$heading[2]='Mobile';
$heading[3]='P1';
$heading[4]='P2';
$heading[5]='P3';
$heading[6]='P4';
$heading[7]='P5';
$heading[8]='P6';
$heading[9]='P7';
$heading[10]='P8';
$heading[11]='P9';
$heading[12]='P10';
$heading[13]='Regd. by';
$heading[14]='Date Time';
}


if(strcmp(trim($event_type),trim('Departmental Event'))!=0)
{
$event_department=null;
if(strcmp(trim($player_type),trim('team'))==0)
{
$sql="select team_name,Email,mobile_number,player1,player2,player3,player4,player5,player6,player7,player8,player9,player10,Registered_by,date_time from team where Event_type='$event_type' and Event='$event'";
}
else
{
$sql="select first_name,last_name,Email,mobile_number,college_name,Registered_by,date_time  from solo where Event_type='$event_type' and Event='$event'";
}
}
else
{
if(strcmp(trim($player_type),trim('team'))==0)
{
$sql="select team_name,Email,mobile_number,player1,player2,player3,player4,player5,player6,player7,player8,player9,player10,Registered_by,date_time from $player_type where Event_type='$event_type' and Event='$event' and Event_department='$department'";
}
else
{
$sql="select first_name,last_name,Email,mobile_number,college_name,Registered_by,date_time  from solo where Event_type='$event_type' and Event='$event' and Event_department='$department'";
}
}

// fetch all data
$result=mysqli_query($con,$sql);
if(!$result)
{
echo -1;
echo $sql;
exit();
}
$num=mysqli_num_rows($result);
if($num==0)
{
echo 3;
exit();
}
// fetch all data

// json encode fetched data
$data=array();
$data[0]=json_encode($heading);
for($i=1;$i<=$num;$i++)
{
$array=mysqli_fetch_assoc($result);
$data[$i]=json_encode(array_values($array));
}
// json encode fetched data

echo json_encode($data);
?>