<article class="posts">
	<article class="posts-header">
		<h1>Articles</h1>
		<h2>Code, Business, freelance, projet, tuto...</h2>
	</article>
	
	<?php foreach ($posts as $post):?>
		<div class="posts-extract">
			<h1><?= $post->p_title ?></h1>
			<h2><?= $post->p_chapo ?></h2>
			<p><?= substr($post->p_content, 0, 300) ?></p>
			<a href="/posts/post/<?= $post->p_id ?>">Suite</a>
		</div>
	<?php endforeach ?>
</article>