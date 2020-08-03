<?php foreach ($posts as $post):?>
	<p><?= $post->p_title ?></p>
	<p><?= $post->p_author ?></p>
	<p><?= $post->p_chapo ?></p>
	<p><?= $post->p_content ?></p>
	<a href="/posts/post/<?= $post->p_id ?>">Suite</a>
<?php endforeach ?>