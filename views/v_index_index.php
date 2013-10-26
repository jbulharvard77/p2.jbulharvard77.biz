<?php if($user): ?>
	Hello <?=$user->first_name;?>
<?php else: ?>
	Welcome to my app.  Please <a href="/users/signup">SIGN UP</a> or <a href="/users/login">LOG IN.</a>
<?php endif; ?>
