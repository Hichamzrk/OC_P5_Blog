<form method="POST">
	<input type="text" name="p_author" placeholder="author">
	<input type="text" name="p_title" placeholder="title">
	<input type="text" name="p_chapo" placeholder="chapo">
	<input type="textarea" name="p_content" placeholder="content">
	<input type="hidden" name="token" value="<?=App\Models\TokenManager::genToken()?>">
	<input type="submit" name="">
</form>