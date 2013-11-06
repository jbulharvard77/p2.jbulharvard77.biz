<h2>Update Profile</h2>
<div id = "olduser2">
<form method='POST' action='/users/p_update/<?=$user_id['user_id']?>'>
        
        First Name: <input type='text' name='first_name'>
                value='<?php if(isset($_POST['first_name'])) echo $_POST['first_name']?>'><br>
        Last Name:  <input type='text' name='last_name'>
                value='<?php if(isset($_POST['last_name'])) echo $_POST['last_name']?>'><br>
        Email:      <input type='text' name='email'>
                value='<?php if(isset($_POST['email'])) echo $_POST['email']?>'><br>

        <input type='submit' value='Update'>

</form>
</div>
