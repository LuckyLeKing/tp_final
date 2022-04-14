<?php

	$filmAdd = false;

	if (isset($_POST["buttonAddFilm"]))
	{
		$error = "";

		//verif bouton
		if ($_POST["buttonAddFilm"] != 1)
		{
			$error .= "Erreur sur le bouton\n";
		}

		//verif date  sortie
		if (!is_numeric($_POST["dateMovie"]) || $_POST["dateMovie"] < 1920 || $_POST["dateMovie"] > 2023)
		{
			$error .= "Erreur sur la date de sortie\n";
		}

		//verfe du titre film
		if (!is_string($_POST["titleMovie"]))
		{
			$error .= "Erreur sur le titre du film\n";
		}


		if (!is_null($error))
		{
			require_once("model/m_addMovie.php");
			$filmAdd = true;
		}
	}

	require_once("view/v_addMovie.php");

?>