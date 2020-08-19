<!--Template view-->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="/css/style.css">
	<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@600&family=Hind&family=Rowdies&family=Teko:wght@400;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://use.typekit.net/abm2osm.css">
	<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
	<title></title>
</head>
<body>
	<header>
		<a class="logo" href="/main"><img src="/picture/logo.png" alt="logo"></a>
		<div class="menu">
			<a href="/posts">Articles</a>
			<a href="/user/index" class="login">Connexion</a>
			<div class="contact">
				<a href="/main/#contact">Contact</a>
			</div>
		</div>
	</header>
	
	<?=$content?>
	
	<footer>
		<div>
			<a href="https://github.com/Hichamzrk"><img src="/picture/icons/github.svg"></a>
			<a href="https://www.linkedin.com/in/hichamzarrouk/"><img src="/picture/icons/linkedin.svg"></a>
			<a href="https://twitter.com/HichamZrk"><img src="/picture/icons/twitter.svg"></a>	
			<a href="/picture/CV.pdf"><img src="/picture/icons/cv.png"></a>
		</div>
		<p>Copyright ©</p>
	</footer>
</body>
</html>