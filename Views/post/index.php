<p>post</p>

<article>
	<img src="" alt="image">
	<p><?= $post->p_title ?></p>
	<p><?= $post->p_author ?></p>
	<p><?= $post->p_chapo ?></p>
	<p><?= $post->p_content ?></p>
	<p>date d'ajout :<?= $post->p_added_datetime ?></p>
	<p><?= $post->p_update_datetime ?></p>
	<p>Commentaire : </p>
</article>

<form method="POST">
	<input type="text" name="c_pseudo" placeholder="pseudo">
	<input type="text" name="c_content" placeholder="commentaire">
	<input type="hidden" name="p_id" value="<?=$post->p_id?>">
	<input type="hidden" name="token" value="<?=App\Models\TokenManager::genToken()?>">
	<input type="submit" name="">
</form>
<article>
	<?php foreach ($comments as $comment):?>
		<img src="" alt="image">
		<p><?= $comment->c_pseudo ?></p>
		<p><?= $comment->c_content ?></p>
	<?php endforeach ?>
</article>