<form method="POST">
	<input type="text" name="p_author" placeholder="author" value="<?=$posts->p_author?>">
	<input type="text" name="p_title" placeholder="title" value="<?=$posts->p_title?>">
	<input type="text" name="p_chapo" placeholder="chapo" value="<?=$posts->p_chapo?>">
	<input type="textarea" name="p_content" placeholder="content" value="<?=$posts->p_content?>">
	<input type="hidden" name="token" value="<?=App\Models\TokenManager::genToken()?>">
	<input type="submit" name="">
</form>