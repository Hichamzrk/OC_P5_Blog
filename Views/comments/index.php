<div class="admin-header">
	<h1>Administration</h1>
	<h2>Commentaires</h2>
</div>

<div class="admin-menu">
	<img src="/picture/icons/menu.png">
</div>
<div class="admin-button">
	<div class="create">
		<a href="/admin/create">New post</a>
	</div>
	<div class="commentaire">
		<a href="/admin/comment">Commentaires</a>
	</div>
	<div class="logout">
		<a href="/user/logout">Logout</a>
	</div>
</div>

<article class="admin-posts">
	<?php foreach ($comments as $comment):?>
		<div class="admin-post">
			<div class="text">
				<h2><?=$comment->c_pseudo?> :  &nbsp<em><?=$comment->c_content?></em></h2>
			</div>
			<div class="update">
				<a href="/admin/updateComment/<?=$comment->c_id?>/<?=App\Models\TokenManager::genToken()?>">valider</a>
			</div>
			<div class="delete">
				<a href="/admin/deleteComment/<?=$comment->c_id?>/<?=App\Models\TokenManager::genToken()?>">delete</a>
			</div>
		</div>
	<?php endforeach ?>
</article>