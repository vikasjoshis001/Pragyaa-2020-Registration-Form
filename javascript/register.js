// Ajax call for Registering user
$(document).ready(function () {
$("#register").on('submit',(function(e)
{
document.getElementById('error').style.color="blue";
e.preventDefault();
$('#error').html("Loading....");
$.ajax({
url: "Ajax/register_save.php",
type: "POST",         
data: new FormData(this), 
contentType:false,     
cache: false,            
processData:false, 
async:true,                    
success: function(data)  
{
document.getElementById('error').style.color="red";
if(data==1)
{
$('#error').html("Email already exists..");
}
else if(data==-2)
{
$('#error').html("Database Connection Error..");
}
else if(data==-1)
{
$('#error').html("Database Query Run Error..");
}
else if(data==0)
{
document.getElementById('error').style.color="green";
$('#error').html("Successfully registered the user...");
}
else
{
$('#error').html("unexpected error, contact web commitee...");
}
}
});
}));
});
// Ajax call for Registering user


// Check both passwords are same or not
function check_password()
{
var psw=document.getElementById('psw').value;
var psw_repeat=document.getElementById('psw-repeat').value;
if(psw==psw_repeat)
{
document.getElementById('psw-match').innerHTML="Passwords Matching";
document.getElementById('psw-match').style.color='green';
}
else
{
document.getElementById('psw-match').innerHTML="Passwords Not Matching";
document.getElementById('psw-match').style.color='red';
}
}
// Check both passwords are same or not


// Validate Form Entries and Master Password before Registering
function validate()
{
var psw=document.getElementById('psw').value;
var psw_repeat=document.getElementById('psw-repeat').value;
if(psw!=psw_repeat)
{
document.getElementById('error').innerHTML="Both Passwords are not Matching";
document.getElementById('error').style.color='red';
return false;
}
var master_psw=document.getElementById('master-psw').value;
var hash=0;
for (i = 0; i < master_psw.length; i++) 
{ 
char = master_psw.charCodeAt(i); 
hash = ((hash << 5) - hash) + char; 
hash = hash & hash; 
}              
if(hash!='515731196')
{
document.getElementById('error').innerHTML="Incorrect Master Password";
document.getElementById('error').style.color='red';
return false;
}
document.getElementById('error').innerHTML="";
return true;
}
// Validate Form Entries and Master Password before Registering