<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script
src="https://code.jquery.com/jquery-3.4.1.js"
integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
crossorigin="anonymous"></script>
<script src="javascript/register.js"></script>
<link rel="stylesheet" type="text/css" href="css/register.css"/>
</head>
<body>

<!-- Register Form -->
<form id="register" onsubmit="return validate()">
<div class="container">
<h1>Register</h1>
<hr>

<label for="first_name"><b>First Name</b></label>
<input id="first_name" type="text" placeholder="First Name" name="first_name" required>

<label for="last_name"><b>Last Name</b></label>
<input id="last_name" type="text" placeholder="Last Name" name="last_name" required>

<label for="email"><b>Email</b></label>
<input id="email" type="email" placeholder="Enter Email" name="email" required>

<label for="psw"><b>Password</b></label>
<input id="psw" oninput="check_password()" type="password" placeholder="Enter Password" name="psw" required>

<label for="psw-repeat"><b>Repeat Password</b></label>
<input id="psw-repeat" oninput="check_password()" type="password" placeholder="Repeat Password" name="psw-repeat" required>
<b id="psw-match"></b>
<hr>
<label for="master-psw"><b>Enter Master Password</b></label>
<input id="master-psw" type="password" placeholder="Master Password" name="master-psw" required>
<b id="error"></b>
<button type="submit" class="registerbtn">Register</button>
</div>

</form>
<!-- Register Form -->

</body>
</html>
