
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
	Welcome to the Inane Banter blog.  If you are already a member please log in here.<br><br>

	<form method='POST' action='/users/p_login'>

	Email:    <input type='text' name='email'>
	Password: <input type='password' name='password'>

	<input type='Submit' value='Log in'>

	</form><br>

</div>

<div id = "olduser2">
	If you are new to the blog please create a profile.<br>
	<a href="/users/signup">Sign Up</a>
</div>

<?php endif; ?>

