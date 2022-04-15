<?php

	function create_user($user, $pwd)
	{
		$bdd = connectDb();
		$query = $bdd->prepare(
			"INSERT INTO user
			VALUES (:id , :user, :pwd, :mail)"
		); // requête SQL
		$query->execute(array(
			'id' => 0,
			'user' => $user,
			'pwd' => $pwd,
			'mail' => 'test@test.fr'
		)); // paramètres et exécution
		$query->closeCursor();
	}

	function exist_user($user)
	{
		$bdd = connectDb();

		$query = $bdd->prepare("Select * from user where login = :username"); // requête SQL
		$query->execute(array(
			'username' => $user
		)); // paramètres et exécution
		$data = $query->fetch();
		$query->closeCursor();
		return $data;
	}

	function couple_mdp_pwd($user, $pwd)
	{
		$bdd = connectDb();

		$query = $bdd->prepare("Select login, pwd from user where login = :username AND pwd = :pwd"); // requête SQL
		$query->execute(array(
			'username' => $user,
			'pwd' => $pwd
		)); // paramètres et exécution
		$data = $query->fetch();
		$query->closeCursor();
		return $data;
	}

?>