<article class="post">
	<h1><?= $post->p_title ?></h1>
	<h2><?= $post->p_chapo ?></h2>
	<div class="post-content">
		<p><?= $post->p_content ?></p>
	</div>
	<div class="post-author">
		<p><?= $post->p_author ?></p>
		<p><?= $post->p_added_datetime ?></p>
	</div>
</article>

<form method="POST" class="post-form">
	<h2>Commentaires : </h2>
	<input type="text" name="c_pseudo" placeholder="Pseudo" required>
	<textarea type="text" name="c_content" placeholder="Commentaire soumis à validation..." required></textarea>
	<input type="hidden" name="p_id" value="<?=$post->p_id?>">
	<input type="hidden" name="token" value="<?=App\Models\TokenManager::genToken()?>">
	<button> Valider </button>
</form>

<article class="post-comments">

		<?php foreach ($comments as $comment):?>
			<div class="post-comment">
				<p><?= $comment->c_pseudo ?> : &nbsp</p>
				<p><?= $comment->c_content ?></p>
			</div>
		<?php endforeach ?>
</article>