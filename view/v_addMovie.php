<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>Ajout d'un film</title>
	<link rel="stylesheet" href="style/style_addMovie.css">
</head>
<body>
	<!-- Menu -->
	
	<header class="menu">
		<ul>
			<li><a href="index.php?target=home">Accueil</a></li>
			<li><a href="index.php?target=connexion">Connexion</a></li>
			<li><a href="index.php?target=addMovie">Ajouter un film</a></li>
		</ul>
	</header>

	<h1>
		Ajouter un film
	</h1>

	<p>
		<?= $filmAdd ? "Le film a été ajouté avec succès" : ""?>
	</p>

	<form action="index.php?target=addMovie" method="post">

		<label for="titleMovie">Titre du film: </label>
		<input type="text" name="titleMovie" id="titleMovie" required placeholder="Ex: Cars"/>
		<br/>

		<label for="dateMovie">Date de sortie: </label>
		<input type="number" name="dateMovie" id="dateMovie" min="1900" max="2022" step="1" required placeholder="Ex: 2006"/>
		<br/>

		<button type="submit" name="buttonAddFilm" value="1">Ajouter</button>
	</form>
</body>
</html>