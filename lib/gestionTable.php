<?php

	function request($orderBy, $orderDirection)
	{
		$bdd = connectDb();

		$query = $bdd->prepare("Select * from film order by " . $orderBy . " " . $orderDirection); // requête SQL
		$query->execute(); // paramètres et exécution
		$data = $query->fetchAll();
		$query->closeCursor();
		return $data;
	}

	function add_movie($name, $date, $nbVotant = 0, $score = 0)
	{
		$min = 0;
		$max = 10;
		$bdd = connectDb();
		$query = $bdd->prepare(
			"INSERT INTO film
			VALUES (:id , :nameFilm, :dateDeSortie, :score, :nbVotant)"
		); // requête SQL
		$query->execute(array(
			'nameFilm' => $name,
			'id' => 0,
			'dateDeSortie' => $date,
			'score' => rand( $min, $max),
			'nbVotant' => $nbVotant
		)); // paramètres et exécution
		$query->closeCursor();
	}

?>