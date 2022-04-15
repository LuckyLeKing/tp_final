<!-- html fais par Arthur pour le visuel merci à ce giga bg -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Connexion</title>
    <link rel="stylesheet" href="./style/style_connexion.css">
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Barlow+Semi+Condensed:wght@300&display=swap');
</style>
<body>
    <section class="all">
        <section class="menu">
            <ul>
                <li><a href="index.php?target=home">Accueil</a></li>
                <li><a href="index.php?target=connexion">Connexion</a></li>
                <li><a href="index.php?target=formulaire">Ajouter un film</a></li>
            </ul>
        </section>
        <h1>Se connecter</h1>
        <section class="formulaires">
            <form class="form" method="post">
                <h2>Nous rejoindre ?</h2>

                <p type="Name:"><input type="text" name="new_user"  placeholder="Nom d'utilisateur"></input></p>
                <p type="password:"><input type="password" name="new_pwd" placeholder="Mot de passe tah les oufs"></input></p>

                <button type="submit" value="Submit_inscription" name="inscriptionFormSubmit">Envoyer</button>
                <button><a href="index.php?target=home">Retour à l'accueil</a></button>
            </form>
            <form class="form" method="post">
                <h2>Déjà inscrit ?</h2>

                <p type="Name:"><input type="text" name="nom_user"  placeholder="Nom d'utilisateur"></input></p>
                <p type="password:"><input type="password" name="mdp_user" placeholder="Mot de passe tah les oufs"></input></p>

                <button type="submit" value="Submit_connexion" name="connexionFormSubmit">Connexion</button>
                <button><a href="index.php?target=home">Retour à l'accueil</a></button>
            </form>
        </section>  
	</section>
	<marquee> Ceci est le HTML/CSS de Arthur Glerean </marquee>
	
</body>
</html>