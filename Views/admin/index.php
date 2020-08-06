<a href="/admin/create">New post</a>
<a href="/user/logout">Logout</a>

<article>
	<?php foreach ($posts as $post):?>
		<p><?=$post->p_title?></p>
		<a href="/admin/delete/<?=$post->p_id?>/<?=App\Models\TokenManager::genToken()?>">delete</a>
		<a href="/admin/update/<?=$post->p_id?>">update</a>
	<?php endforeach ?>
</article>

<article>
	<?php foreach ($comments as $comment):?>
		<p><?=$comment->c_pseudo?></p>
		<a href="/admin/updateComment/<?=$comment->c_id?>/<?=App\Models\TokenManager::genToken()?>">valider</a>
	<?php endforeach ?>
</article>
