<form method="POST">
	<input type="text" name="author" placeholder="author" value="<?=$posts->p_author?>">
	<input type="text" name="title" placeholder="title" value="<?=$posts->p_title?>">
	<input type="text" name="chapo" placeholder="chapo" value="<?=$posts->p_chapo?>">
	<input type="textarea" name="content" placeholder="content" value="<?=$posts->p_content?>">
	<input type="submit" name="">
</form>