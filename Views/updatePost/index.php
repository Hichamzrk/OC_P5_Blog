<script>
    tinymce.init({
 	selector: '#mytextarea',
 	width : "90%",
 	height : "900",
    });
</script>

<article>
	<div class="admin-header">
	<h1>Administration</h1>
	<h2>Update article</h2>
</div>
<form method="POST" class="post-new">
	<input type="text" name="p_author" placeholder="auteur" value="<?=$posts->p_author?>">
	<input type="text" name="p_title" placeholder="title" value="<?=$posts->p_title?>">
	<input type="text" name="p_chapo" placeholder="chapo" value="<?=$posts->p_chapo?>">
	<textarea id="mytextarea" type="text" name="p_content"><?=$posts->p_content?></textarea>
	<input type="hidden" name="token" value="<?=App\Models\TokenManager::genToken()?>">
	<button>Envoyer</button>
</form>