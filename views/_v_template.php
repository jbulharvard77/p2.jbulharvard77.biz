<!DOCTYPE html>
<html>
<head>
	<title><?php if(isset($title)) echo $title; ?></title>

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />	
	<link rel="stylesheet" href="/css/app.css" type="text/css">

	<!-- Controller Specific JS/CSS -->
	<?php if(isset($client_files_head)) echo $client_files_head; ?>
	
</head>

<body>

	<div id="navigation">
    <ul>
      <li id="navpart1"><a href="/users/logout">[Log out]</a></li>
      <li id="navpart2"><a href="/users/profile">[View/Update Profile]</a></li>
      <li id="navpart3"><a href="/posts/users">[Manage Follows]</a></li>
      <li id="navpart4"><a href="/posts/">[View Posts]</a></li>
      <li id="navpart5"><a href="/posts/add">[New Post]</a></li>
    </ul>
	</div>

	<h1>The Inane Banter Blog</h1>

  <br><br><br>

	<?php if(isset($content)) echo $content; ?>

	<?php if(isset($client_files_body)) echo $client_files_body; ?>

</body>
</html>