<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="style/style_home.css">
	<link href='https://fonts.googleapis.com/css?family=Rock+Salt' rel='stylesheet' type='text/css'>
	<title>Tp Final</title>
</head>
<body>

<header class="menu">
		<ul>
			<li><a href="index.php?target=home">Accueil</a></li>
			<li><a href="index.php?target=connexion">Connexion</a></li>
			<li><a href="index.php?target=addMovie">Ajouter un film</a></li>
		</ul>
</header>

    <h1>
        <?php
            echo "Titre : " . $movie["nom"];
        ?>
    </h1>

    <p>
        <?php
            echo "Année : " . $movie["annee"] . "<br>";
            echo "Nombre de votes : " . $movie["nbVotant"] . "<br>";
            echo "Score : " . $movie["score"] . "<br>";
            echo "Synopsis : faut en faire 1 par film mais bon..." . "<br>"; // ici je pourrais aussi le faire en cherchant dnas la DB mais j'ai pas le temps de mettre dans la DB
            // mais en gros ça serait echo "Score : " . $movie["Synopsis"] . "<br>";
        ?>
    </p>



</body>
</html>


