
// Ajax Form Submit for Login
$(document).ready(function () {
$("#login").on('submit',(function(e)
{
$('#error').css('color','blue');
e.preventDefault();
$('#error').html("verifying....");
$.ajax({
url: "Ajax/verify.php",
type: "POST",         
data: new FormData(this), 
contentType:false,     
cache: false,            
processData:false, 
async:true,                    
success: function(data)  
{
$('#error').css('color','red');
if(data==1)
{
$('#error').html("Username or Password do not match..");
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
$('#error').css('color','green');
$('#error').html("Successfully login, redirecting please wait...");
window.location.href = 'form.php';
}
else
{
$('#error').html("unexpected error, contact web commitee...");
}
}
});
}));
});
// Ajax Form Submit for Login


// close login window when user click outside
var modal = document.getElementById('id01');
window.onclick = function(event) {
if (event.target == modal) {
modal.style.display = "none";
}
}
// close login window when user click outside
