<?php
session_start();

include 'database.php';

$players=array();
$team_name=$_POST['team_name'];
$leader_name=$_POST['leader_name'];
$email=$_POST['email'];
$mobile=$_POST['mnumber'];
$no_of_players=$_POST['no_of_players'];
for($i=0;$i<$no_of_players;$i++)
{
$pid=$i+1;
$pid='player'.$pid;
$players[$i]=$_POST[$pid];
}
for($i=$no_of_players;$i<10;$i++)
{
$pid='player'.$i;
$players[$i]=null;
}
$college=$_POST['college'];
$district=$_POST['district'];
$event_type=$_POST['event_type'];
$event_department=$_POST['event_department'];
$event=$_POST['event'];
$registered_by=$_SESSION['uname'];

if(!$con)
{
echo -2;
exit();
}

// check for already registered or not
$sql="select * from team where email='$email' and Event='$event'";
$result=mysqli_query($con,$sql);
if(!$result)
{
echo -1;
exit();
}
// check for already registered or not


$player1=$players[0];
$player2=$players[1];
$player3=$players[2];
$player4=$players[3];
$player5=$players[4];
$player6=$players[5];
$player7=$players[6];
$player8=$players[7];
$player9=$players[8];
$player10=$players[9];
if(strcmp(trim($event_type),trim('Departmental Event'))!=0)
{
$event_department=null;
}

// insert data into database
$sql="insert into team(team_name,leader_name,Email,mobile_number,player1,player2,player3,player4,player5,player6,player7,player8,player9,player10,college_name,district,Event_type,Event_department,Event,Registered_by,date_time) values('$team_name','$leader_name','$email','$mobile','$player1','$player2','$player3','$player4','$player5','$player6','$player7','$player8','$player9','$player10','$college','$district','$event_type','$event_department','$event','$registered_by',now())";
$result=mysqli_query($con,$sql);
if(!$result)
{
echo -1;
exit();
}
// insert data into database

$to = $email;
$subject = 'Thanks for Registering...';
$from = 'pragyaa@sggs.ac.in';
 
// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
 
// Create email headers
$headers .= 'From: '.$from."\r\n".
    'Reply-To: '.$from."\r\n" .
    'X-Mailer: PHP/' . phpversion();
 
// Compose a simple HTML email message
$message = '<html><body>';
$message .= '<h1 style="color:#f40;">Welcome To Pragyaa...</h1><br><h3>Your Registeration for '.$event.' is successfull</h3><br><br><br><p>Thanks for Praticpating</p><b>All The Best..</b>';
$message .= '</body></html>';
 
// Sending email
mail($to, $subject, $message, $headers);

mysqli_close($con);
echo 0;
?>