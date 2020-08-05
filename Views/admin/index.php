<a href="/admin/create">New post</a>
<a href="/user/logout">Logout</a>

<?php foreach ($posts as $post):?>
	<p><?=$post->p_title?></p>
	<a href="/admin/delete/<?=$post->p_id?>">delete</a>
	<a href="/admin/update/<?=$post->p_id?>">update</a>
<?php endforeach ?>

<?php foreach ($comments as $comment):?>
	<p><?=$comment->c_pseudo?></p>
	<a href="/admin/updateComment/<?=$comment->c_id?>">valider</a>
<?php endforeach ?>
