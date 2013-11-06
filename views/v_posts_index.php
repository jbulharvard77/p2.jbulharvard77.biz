<h2>Posts You're Following</h2>

<?php foreach($posts as $post): ?>


<article>
	
    <h1><?=$post['first_name']?> <?=$post['last_name']?> posted:</h1>

    <p><?=$post['content']?></p>

    <time datetime="<?=Time::display($post['created'],'Y-m-d G:i')?>">
        <?=Time::display($post['created'])?>
    </time>

</article>
<br>

	<form action="/posts/delete/<?=$post['post_id']?>
	<input type="hidden" name="post_id" value="<?$post['post_id']?>">
	<input type="submit" value="delete">

</form>

<?php endforeach; ?>


