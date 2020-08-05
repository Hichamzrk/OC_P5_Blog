<a href="/posts">Les posts</a>
<p><?= $post->p_title ?></p>
<p><?= $post->p_author ?></p>
<p><?= $post->p_chapo ?></p>
<p><?= $post->p_content ?></p>
<p>Commentaire : </p>

<form method="POST">
	<input type="text" name="c_pseudo" placeholder="pseudo">
	<input type="text" name="c_content" placeholder="commentaire">
	<input type="hidden" name="p_id" value="<?=$post->p_id?>">
	<input type="submit" name="">
</form>

<?php foreach ($comments as $comment):?>
	<p><?= $comment->c_pseudo ?></p>
	<p><?= $comment->c_content ?></p>
<?php endforeach ?>