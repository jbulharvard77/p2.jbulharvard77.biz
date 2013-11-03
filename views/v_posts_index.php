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

	<a href ="/posts/p_delete/post_id"> Delete Post</a>

<?php endforeach; ?>


