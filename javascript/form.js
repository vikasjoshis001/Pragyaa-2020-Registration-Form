
// switch to solo form
function solo()
{
document.getElementById('solo').style.display="block";
document.getElementById('team').style.display="none";
document.getElementById('btn_solo').style.backgroundColor='#0000ab';
document.getElementById('btn_team').style.backgroundColor='#00008b';
}
// switch to solo form


// switch to team form
function team()
{
document.getElementById('team').style.display="block";
document.getElementById('solo').style.display="none";
document.getElementById('btn_team').style.backgroundColor='#0000ab';
document.getElementById('btn_solo').style.backgroundColor='#00008b'
}
// switch to team form




// js for solo events
// get other events from database through AJAX for solo
$(document).ready(function () {
$("#event_type").on('change',(function(e)
{
var event_type=document.getElementById('event_type').value;
if(event_type==='Departmental Event')
{
document.getElementById('event_department').style.display='block';
document.getElementById('other_events').style.display='none';
return false;
}
else
{
document.getElementById('event_department').style.display='none';
document.getElementById('events').style.display='none';
}
e.preventDefault();
$.ajax({
url: "Ajax/getotherevents.php",
type: "GET",  
datatype: "JSON",       
data: "event_type="+event_type, 
contentType:false,     
cache: false,            
processData:false, 
async:true,                    
success: function(data)  
{
if(data==-2)
{
document.getElementById('event_error').innerHTML="* Database Connection Error";

}
else if(data==-1)
{
document.getElementById('event_error').innerHTML="*Query Run Error";

}
else
{
data=$.parseJSON(data);
var ans='';
for(i=0;i<data.length;i++)
{
ans=ans+"<input type='radio' name='event' value='"+data[i].name+"'>"+data[i].name+"</input><br>";
}
document.getElementById('other_events').innerHTML=ans;
document.getElementById('other_events').style.display='block';
}
}
});
}));
});
// get other events from database through AJAX for solo







// get departmental events from database through AJAX for solo
$(document).ready(function () {
$("#selected_dept").on('change',(function(e)
{
var dept=document.getElementById('selected_dept').value;
e.preventDefault();
$.ajax({
url: "Ajax/getevents.php",
type: "GET",  
datatype: "JSON",       
data: "dept="+dept, 
contentType:false,     
cache: false,            
processData:false, 
async:true,                    
success: function(data)  
{
if(data==-2)
{
document.getElementById('event_error').innerHTML="* Database Connection Error";

}
else if(data==-1)
{
document.getElementById('event_error').innerHTML="*Query Run Error";

}
else
{
data=$.parseJSON(data);
var ans='';
for(i=0;i<data.length;i++)
{
ans=ans+"<input type='radio' name='event' value='"+data[i].name+"'>"+data[i].name+"</input><br>";
}
document.getElementById('events').style.display='block';
document.getElementById('events').innerHTML=ans;
}
}
});
}));
});
//get departmental events from database through AJAX for solo



//submit register form for solo with AJAX
$(document).ready(function () {
$("#solo").on('submit',(function(e)
{
var event_type=document.getElementById('event_type');
if (event_type.value=='Select')
{
document.getElementById('event_type_error').innerHTML="*please select Event type";
return false;
}
else
{
document.getElementById('event_type_error').innerHTML="";
if (event_type.value=='Departmental Event')
{
var department=document.getElementById('selected_dept');
if(department.value=='select')
{
document.getElementById('department_error').innerHTML="*please select valid Department type";
return false;
}
else
{
document.getElementById('department_error').innerHTML="";
}
}
var radioValue='not';
var radioValue = $("input[name='event']:checked").val();
if(radioValue==null)
{
document.getElementById('event_error').innerHTML="*please select any event";
return false;
}
else
{
document.getElementById('event_error').innerHTML="";
}
}
document.getElementById('error').style.color="blue";
e.preventDefault();
$('#error').html("Submitting....");
$.ajax({
url: "Ajax/solo.php",
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
$('#error').html("Given Email already registered for this event..");
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
$('#error').html("Successfully registered...");
}
else
{
$('#error').html("unexpected error, contact web commitee...");
}
}
});
}));
});
//   submit register form for solo with AJAX
//   js for solo




// js for team
// dynamic increase players name columns for team
function add_players()
{
var no_of_players=document.getElementById('no_of_players').value;
document.getElementById('players').innerHTML='';
if(no_of_players >= 2)
{
var i=0;
var ans='';
for(i=1;i<=no_of_players;i++)
{
ans=ans+"<label for='player"+i+"'><b>Player "+i+" :-</b></label><input autocomplete='off' type='text' placeholder='Player "+i+" Name' name='player"+i+"' required>";
}
document.getElementById('players').innerHTML=ans;
}
}
// dynamic increase players name columns for team


// get other events from database through AJAX for team
$(document).ready(function () {
$("#t_event_type").on('change',(function(e)
{
var event_type=document.getElementById('t_event_type').value;
if(event_type==='Departmental Event')
{
document.getElementById('t_event_department').style.display='block';
document.getElementById('t_other_events').style.display='none';
return false;
}
else
{
document.getElementById('t_event_department').style.display='none';
document.getElementById('t_events').style.display='none';
}
e.preventDefault();
$.ajax({
url: "Ajax/getotherevents.php",
type: "GET",  
datatype: "JSON",       
data: "event_type="+event_type, 
contentType:false,     
cache: false,            
processData:false, 
async:true,                    
success: function(data)  
{
if(data==-2)
{
document.getElementById('t_other_event_error').innerHTML="* Database Connection Error";

}
else if(data==-1)
{
document.getElementById('t_other_event_error').innerHTML="*Query Run Error";

}
else
{
data=$.parseJSON(data);
var ans='';
for(i=0;i<data.length;i++)
{
ans=ans+"<input type='radio' name='event' value='"+data[i].name+"'>"+data[i].name+"</input><br>";
}
document.getElementById('t_other_events').innerHTML=ans;
document.getElementById('t_other_events').style.display='block';
}
}
});
}));
});
// get other events from database through AJAX for team











// get departmental events from database through AJAX for team
$(document).ready(function () {
$("#t_selected_dept").on('change',(function(e)
{
var dept=document.getElementById('t_selected_dept').value;
e.preventDefault();
$.ajax({
url: "Ajax/getevents.php",
type: "GET",  
datatype: "JSON",       
data: "dept="+dept, 
contentType:false,     
cache: false,            
processData:false, 
async:true,                    
success: function(data)  
{
if(data==-2)
{
document.getElementById('t_event_error').innerHTML="* Database Connection Error";

}
else if(data==-1)
{
document.getElementById('t_event_error').innerHTML="*Query Run Error";

}
else
{
data=$.parseJSON(data);
var ans='';
for(i=0;i<data.length;i++)
{
ans=ans+"<input type='radio' name='event' value='"+data[i].name+"'>"+data[i].name+"</input><br>";
}
document.getElementById('t_events').style.display='block';
document.getElementById('t_events').innerHTML=ans;
}
}
});
}));
});
// get departmental events from database through AJAX for team




// submit registertation form for team with AJAX
$(document).ready(function () {
$("#team").on('submit',(function(e)
{
var event_type=document.getElementById('t_event_type');
if (event_type.value=='Select')
{
document.getElementById('t_event_type_error').innerHTML="*please select Event type";
return false;
}
else
{
document.getElementById('t_event_type_error').innerHTML="";
if (event_type.value=='Departmental Event')
{
var department=document.getElementById('t_selected_dept');
if(department.value=='select')
{
document.getElementById('t_department_error').innerHTML="*please select valid Department type";
return false;
}
else
{
document.getElementById('t_department_error').innerHTML="";
}
}
var radioValue='not';
var radioValue = $("input[name='event']:checked").val();
if(radioValue==null)
{
document.getElementById('t_event_error').innerHTML="*please select any event";
return false;
}
else
{
document.getElementById('t_event_error').innerHTML="";
}
}
document.getElementById('error').style.color="blue";
e.preventDefault();
$('#t_error').html("Submitting....");
$.ajax({
url: "Ajax/team.php",
type: "POST",         
data: new FormData(this), 
contentType:false,     
cache: false,            
processData:false, 
async:true,                    
success: function(data)  
{
document.getElementById('t_error').style.color="red";
if(data==1)
{
$('#t_error').html("Given Email already registered for this event..");
}
else if(data==-2)
{
$('#t_error').html("Database Connection Error..");
}
else if(data==-1)
{
$('#t_error').html("Database Query Run Error..");
}
else if(data==0)
{
document.getElementById('t_error').style.color="green";
$('#t_error').html("Successfully registered...");
}
else
{
$('#t_error').html("unexpected error, contact web commitee...");
}
}
});
}));
});
// submit registertation form for team with AJAX
// js for team










// Ajax for getting data for generating pdf and generate pdf
$(document).ready(function () {
$("#get_pdf").on('submit',(function(e)
{
if(document.getElementById('p_event_type').value=='Select')
{
document.getElementById('p_event_type_error').innerHTML="* please select Event Type";
return false;
}
else
{
document.getElementById('p_event_type_error').innerHTML="";
}

if(document.getElementById('p_event_type').value==='Departmental Event')
{

if(document.getElementById('p_selected_dept').value=='select')
{
document.getElementById('p_event_department_error').innerHTML="* please select Department";
return false;
}
else
{
document.getElementById('p_event_department_error').innerHTML="";
}
}
document.getElementById('p_error').style.color="blue";
e.preventDefault();
$('#p_error').html("generating pdf....");
$.ajax({
url: "Ajax/generate_pdf.php",
type: "POST",
datatype: "JSON",         
data: new FormData(this), 
contentType:false,     
cache: false,            
processData:false, 
async:true,                    
success: function(data)  
{
document.getElementById('p_error').style.color="red";
document.getElementById('p_error').innerHTML="";


if(data==-2)
{
$('#p_error').html("Database Connection Error..");
return false;
}
else if(data==-1)
{
$('#p_error').html("Database Query Run Error..");
return false;
}
else if(data==2)
{
$('#p_error').html("Incorrect Password...");
return false;
}
else if(data==3)
{
$('#p_error').html("No result Found...");
return false;
}
else
{
document.getElementById('p_error').style.color="green";
data=$.parseJSON(data);
var head=$.parseJSON(data[0]);
var i=0;
var  j=0;
var  ans="<div class='table-responsive'><table class='table table-striped table-bordered'>";
for(i=0;i<head.length;i++)
{
ans=ans+"<th>"+head[i]+"</th>";
}
for(i=0;i<data.length-1;i++)
{
ans=ans+"<tr>";
data[i+1]=$.parseJSON(data[i+1]);
for(j=0;j<data[i+1].length;j++)
{
ans=ans+"<td>"+data[i+1][j]+"</td>";

}
ans=ans+"</tr>";
}
ans=ans+"</table></div>";
var event=document.getElementById('p_event').value;
var uname=document.getElementById('username').innerHTML;
var printWindow = window.open('', '', 'height=400,width=1800');
printWindow.document.write("<html><head><meta charset='utf-8'><meta name='viewport' content='width=device-width, initial-scale=1'><link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'><script src='https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script><script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js'></script><script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js'></script><link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'><title>"+event+"</title>");
printWindow.document.write('</head><body>');
printWindow.document.write("<div class='fluid-container header'><span class='col-xs-1'><img class='rounded-circle' height='100' width='100' src='images/pragyaa.jpg'/><span> <span class='col-xs-11'><p style='text-align:center;display:inline'>List of Registered Students for "+event+"</p></span></div>");
printWindow.document.write(ans);
printWindow.document.write("<div style='position: absolute; bottom: 5px'><i>- This pdf is generated by "+uname+"</i></div>");
printWindow.document.write('</body></html>');
printWindow.document.close();
console.log(printWindow);
printWindow.print();
$('#p_error').html("successfully generated pdf...");
}
}
});
}));
});
// Ajax for getting data for generating pdf and generate pdf

// Ajax for getting events in get pdf form
$(document).ready(function () {
$("#p_event_type").on('change',(function(e)
{
var event_type=document.getElementById('p_event_type').value;
if(event_type==='Departmental Event')
{
document.getElementById('p_event_department').style.display='block';
}
else if(event_type==='Select')
{
document.getElementById('p_event_div').style.display='none'
return false;
}
else
{
document.getElementById('p_event_department').style.display='none';
}
e.preventDefault();
$.ajax({
url: "Ajax/getotherevents.php",
type: "GET",  
datatype: "JSON",       
data: "event_type="+event_type, 
contentType:false,     
cache: false,            
processData:false, 
async:true,                    
success: function(data)  
{
if(data==-2)
{
document.getElementById('p_event_error').innerHTML="* Database Connection Error";   
}
else if(data==-1)
{
document.getElementById('p_event_error').innerHTML="*Query Run Error";

}
else
{
data=$.parseJSON(data);
var ans='';
for(i=0;i<data.length;i++)
{
ans=ans+"<option>"+data[i].name+"</option>";
}
document.getElementById('p_event').innerHTML=ans;
document.getElementById('p_event_div').style.display='block';
}
}
});
}));
});
// Ajax for getting events in get pdf form

// Ajax for getting departments in get pdf form
$(document).ready(function () {
$("#p_selected_dept").on('change',(function(e)
{
var dept=document.getElementById('p_selected_dept').value;
e.preventDefault();
$.ajax({
url: "Ajax/getevents.php",
type: "GET",  
datatype: "JSON",       
data: "dept="+dept, 
contentType:false,     
cache: false,            
processData:false, 
async:true,                    
success: function(data)  
{
if(data==-2)
{
document.getElementById('p_event_error').innerHTML="* Database Connection Error";

}
else if(data==-1)
{
document.getElementById('p_event_error').innerHTML="*Query Run Error";

}
else
{
data=$.parseJSON(data);
var ans='';
for(i=0;i<data.length;i++)
{
ans=ans+"<option>"+data[i].name+"</option><br>";
}
document.getElementById('p_event_div').style.display='block';
document.getElementById('p_event').innerHTML=ans;
}
}
});
}));
});
// Ajax for getting departments in get pdf form






// AJAX for logout
$(document).ready(function () {
$("#logout").on('click',(function(e)
{
e.preventDefault();
$.ajax({
url: "Ajax/logout.php",       
contentType:false,     
cache: false,            
processData:false, 
async:true,                    
success: function(data)  
{
window.location='index.php';
}
});
}));
});
// AJAX for logout


// click window when clicked outside
var modal = document.getElementById('id01');
window.onclick = function(event) {
if (event.target == modal) {
modal.style.display = "none";
}
}
// click window when clicked outside


// change header for mobile
$(document).ready(function () {
if (typeof window.orientation !== 'undefined') 
{ 
document.getElementById('logo').classList.add("center");
document.getElementById('desk_info').style.display="none";
document.getElementById('mobile_info').style.display="block";
document.getElementById('mobile_info').style.textAlign="center";

}
else
{
document.getElementById('logo').style.width="150px";
document.getElementById('logo').style.height="150px";
}
// setTimeout(function(){$('#mobile_info').addClass('animated bounce');
// $('#desk_info').addClass('animated bounce');
// $('#logo').addClass('animated bounce');}, 800);




});
// change header for mobile

