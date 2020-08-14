<div class="admin-header">
	<h1>Administration</h1>
	<h2>Articles</h2>
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
	<?php foreach ($posts as $post):?>
		<div class="admin-post">
			<div class="text">
				<h2><?=$post->p_title?></h3>
			</div>
			<div class="update">
				<a href="/admin/update/<?=$post->p_id?>">Update</a>
			</div>
			
			<div class="delete">
					<a href="/admin/delete/<?=$post->p_id?>/<?=App\Models\TokenManager::genToken()?>" onclick="return confirm('Tu es sur ?')">Delete</a>
			</div>
		</div>
	<?php endforeach ?>
</article>


