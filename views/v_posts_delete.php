
<form action="/posts_delete/<?=$posts['post_id']?>" method="posts">
	Are you sure you want to delete?
	<input type="submit" name="delete" value="delete"/>
</form>
<?php echo var_dump($posts) ?> 