<p>posts</p>

<article>
	<?php foreach ($posts as $post):?>
		<img src="" alt="image">
		<p><?= $post->p_title ?></p>
		<p><?= $post->p_update_datetime ?></p>
		<p><?= $post->p_chapo ?></p>
		<p><?= $post->p_content ?></p>
		<a href="/posts/post/<?= $post->p_id ?>">Suite</a>
	<?php endforeach ?>
</article>