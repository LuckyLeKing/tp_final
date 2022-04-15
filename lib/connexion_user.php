<?php
	
	function connectDb()
	{
		$host = 'iutdoua-web.univ-lyon1.fr'; 
		$user = 'p2018799'; 
		$pwd = '572362'; 
		$db = "user"; 
		try 
		{
			$bdd = new PDO('mysql:host='.$host.';dbname='.$db.';charset=utf8', $user, $pwd, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
			return $bdd;
		} 
		catch (Exception $e) 
		{
			exit('Erreur : '.$e->getMessage());
		}
	}

	function getTabCol()
	{
		$bdd = connectDb(); //connexion à la BDD

		$queryListColumn = $bdd->prepare("DESCRIBE user");
		$queryListColumn->execute();
		return $queryListColumn->fetchAll(PDO::FETCH_COLUMN);
	}
	
?>
