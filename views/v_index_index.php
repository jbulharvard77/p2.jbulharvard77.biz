<?php if($user): ?>
<div id= "olduser">
	Hello <?=$user->first_name;?>!  Welcome back...<br>

	Did you want to add a new post?<br>

	<form method='POST' action='/posts/p_add'>

    <textarea name='content' id='content'></textarea>

    <br>
    <input type='submit' value='New post'>

	</form> 
</div>

<?php else: ?>

<div id = "olduser2">
	Welcome to the Inane Banter blog.  If you are already a member please log in here.  Once in you can edit and update posts that you are following
	<br><br>(I wanted to mention that I had a major computer issue the past few days where I lost my permissions.  I've been updating all code in github and testing it on the live server, which is not ideal.  I just wanted to let you know.  
	I know it's not an excuse but it certainly contributed to me falling short of all the requirements.<br><br>

	<form method='POST' action='/users/p_login'>

	Email:    <input type='text' name='email'>
	Password: <input type='password' name='password'>

	<input type='Submit' value='Log in'>
</div>

<div id = "olduser2">

	</form><br>

	If you are new to the blog please create a profile.<br>
	<a href="/users/signup">Sign Up</a>
</div>

<?php endif; ?>

