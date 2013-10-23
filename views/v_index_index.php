<!DOCTYPE html>
<html>
<head>
<title>Inane banter</title>
</head>
<body>

<h2>Welcome to the Inane Banter Blog</h2>

<h3>Please either: </h3>

<h2>Log in</h2>

<div id="box">
<form method='POST' action='/users/p_login'>

	Email:    <input type='text' name='email'><br>
	Password: <input type='password' name='password'><br>

	<input type='Submit' value='Log in'>
</div>


</form>

<h3>or</h3>

<h2>Sign up</h2>
<form method='POST' action='/users/p_signup'>
	
	First Name: <input type='text' name='first_name'><br>
	Last Name:  <input type='text' name='last_name'><br>
	Email: 		<input type='text' name='email'><br>
	Password: 	<input type='password' name='password'><br>

	<input type='submit' value='Sign Up'>

</form>
</body>
</html>