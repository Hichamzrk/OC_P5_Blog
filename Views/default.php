<!--Template view-->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/<?=$style?>.css">
	<title></title>
</head>
<body>
	<header>
		<a href="/main">Accueil</a>
		<h1>Logo</h1>
		<a href="/posts">Articles</a>
		<form action="/user/index">
			<button>Connexion</button>
		</form>
	</header>
	<?=$content?>
	<footer>
		<p>copyright</p>
	</footer>
</body>
</html>