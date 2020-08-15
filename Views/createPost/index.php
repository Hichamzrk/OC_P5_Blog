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
	<h2>New article</h2>
</div>
</article>
<form method="POST" class="post-new">
	<input type="text" name="p_author" placeholder="auteur">
	<input type="text" name="p_title" placeholder="title">
	<input type="text" name="p_chapo" placeholder="chapo">
	<textarea id="mytextarea" type="text" name="p_content">Hello, World!</textarea>
	<input type="hidden" name="token" value="<?=App\Models\TokenManager::genToken()?>">
	<button>Envoyer</button>
</form>
