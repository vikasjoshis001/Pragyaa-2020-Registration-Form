<?php
session_start();

include 'database.php';

$first_name=$_POST['fname'];
$last_name=$_POST['lname'];
$gender=$_POST['gender'];
$email=$_POST['email'];
$mobile=$_POST['mnumber'];
$college=$_POST['college'];
$branch=$_POST['branch'];
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

// check already registered or not
$sql="select * from solo where email='$email' and Event='$event'";
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
// check already registered or not


if(strcmp(trim($event_type),trim('Departmental Event'))!=0)
{
$event_department=null;
}

// insert data into database
$sql="insert into solo(first_name,last_name,Gender,Email,mobile_number,college_name,branch,district,Event_type,Event_department,Event,Registered_by,date_time) values('$first_name','$last_name','$gender','$email','$mobile','$college','$branch','$district','$event_type','$event_department','$event','$registered_by',now())";
$result=mysqli_query($con,$sql);
if(!$result)
{
echo -1;
exit();
}
mysqli_close($con);
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
?>
echo 0;
?>