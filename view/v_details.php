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
            echo "Titre : " . $row["nom"];
        ?>
    </h1>

    <p>
        <?php
            echo "Année : " . $row["annee"];
            echo "Nombre de votes : " . $row["nbVotant"];
            echo "Score : " . $row["score"];
            echo "Synopsis : faut en faire 1 par film mais bon...";
        ?>
    </p>



</body>
</html>


