<?php

	require_once("view/v_connexion.php");
	require_once("model/m_formulaire.php");
	require_once("lib/connexion.php");
	require_once("lib/gestionTable_user.php");


	if (isset($_POST["inscriptionFormSubmit"]))
	{
		$error = "";

		//verif bouton
		if ($_POST["inscriptionFormSubmit"] != 1)
		{
			$error .= "Erreur sur le bouton\n";
		}

		//verif username
		if (exist_user($_POST["new_user"]))
		{
			echo "<p id=messagesign style=\"color:red; font-size:20px; text-align:center;\">Utilisateur existe déjà</p>";
		}
		else
		{
			create_user($_POST["new_user"], $_POST["new_pwd"]);
			echo "<p id=messagesign style=\"color:green; font-size:20px; text-align:center;\">Nouvel utilisateur crée avec succès</p>";
		}
	}

	if (isset($_POST["connexionFormSubmit"]))
	{
		$error = "";

		//verif bouton
		if ($_POST["connexionFormSubmit"] != 1)
		{
			$error .= "Erreur sur le bouton\n";
		}

		//verif username
		if (couple_mdp_pwd($_POST["nom_user"], $_POST["mdp_user"]))
		{
			echo "<p id=messagesign style=\"color:green; font-size:20px; text-align:center;\">Connexion établie avec succès</p>";
			
		}
		else
		{
			echo "<p id=messagesign style=\"color:red; font-size:20px; text-align:center;\">Nom d'utilisateur ou mot de passe incorect</p>";
		}
	}


?>