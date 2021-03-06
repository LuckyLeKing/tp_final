<?php
	
	function connectDb()
	{
		$host = '127.0.0.1';//$host = 'iutdoua-web.univ-lyon1.fr'; 
		$user = 'lucky';  		//$user = 'p2018799'; 
		$pwd = 'Password';  	//$pwd = '572362';
		$db = "p2018799"; 
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

		$queryListColumn = $bdd->prepare("DESCRIBE film");
		$queryListColumn->execute();
		return $queryListColumn->fetchAll(PDO::FETCH_COLUMN);
	}

	

/*
Pour initialiser les tables sur la bdd, il faut 

function getTabCol()
	{
		$bdd = connectDb(); //connexion à la BDD

		$queryListColumn = $bdd->prepare("
		CREATE or replace TABLE user ( id INT NOT NULL AUTO_INCREMENT , login VARCHAR(255) NOT NULL , pwd VARCHAR(255) NOT NULL, mail VARCHAR(255) NOT NULL , PRIMARY KEY (id)) ;
		CREATE or replace TABLE film ( id INT NOT NULL AUTO_INCREMENT , nom VARCHAR(255) NOT NULL , annee INT NOT NULL , score FLOAT NOT NULL , nbVotant INT NOT NULL , PRIMARY KEY (id)) ;    
		INSERT INTO film VALUES (2,'Pulp Fiction',1994,8.4,11693);
		INSERT INTO film VALUES (3,'Blade Runner',1982,8.6,8665);
		INSERT INTO film VALUES (4,'Titanic',1997,9.2,8129);
		INSERT INTO film VALUES (5,'Braveheart',1995,8.4,8074);
		INSERT INTO film VALUES (6,'Empire Strikes Back, The',1980,8.5,8050);
		INSERT INTO film VALUES (7,'Shawshank Redemption, The',1994,8.8,7850);
		INSERT INTO film VALUES (8,'Independence Day',1996,7.0,7138);
		INSERT INTO film VALUES (9,'Usual Suspects, The',1995,8.7,6981);
		INSERT INTO film VALUES (10,'Raiders of the Lost Ark',1981,8.4,6488);
		INSERT INTO film VALUES (11,'2001: A Space Odyssey',1968,8.4,6413);
		INSERT INTO film VALUES (12,'Forrest Gump',1994,7.8,6269);
		INSERT INTO film VALUES (14,'Silence of the Lambs, The',1991,8.3,5715);
		INSERT INTO film VALUES (15,'Princess Bride, The',1987,8.4,5522);
		INSERT INTO film VALUES (16,'Terminator 2: Judgment Day',1991,8.0,5513);
		INSERT INTO film VALUES (17,'Casablanca',1942,8.7,5489);
		INSERT INTO film VALUES (18,'Monty Python and the Holy Grail',1974,8.4,5319);
		INSERT INTO film VALUES (19,'Star Trek: First Contact',1996,8.2,5298);
		INSERT INTO film VALUES (20,'Fargo',1996,8.2,5293);
		INSERT INTO film VALUES (21,'Twelve Monkeys',1995,8.0,5287);
		INSERT INTO film VALUES (22,'Trainspotting',1996,8.1,5233);
		INSERT INTO film VALUES (23,'Godfather, The',1972,8.7,5211);
		INSERT INTO film VALUES (24,'Se7en',1995,8.1,5107);
		INSERT INTO film VALUES (25,'Back to the Future',1985,7.8,5103);
		INSERT INTO film VALUES (26,'Rock, The',1996,8.0,4938);
		INSERT INTO film VALUES (27,'Reservoir Dogs',1992,8.3,4861);
		INSERT INTO film VALUES (28,'Apocalypse Now',1979,8.3,4860);
		INSERT INTO film VALUES (30,'Apollo 13',1995,7.8,4778);
		INSERT INTO film VALUES (31,'Clockwork Orange, A',1971,8.4,4767);
		INSERT INTO film VALUES (32,'Jurassic Park',1993,7.4,4707);
		INSERT INTO film VALUES (33,'English Patient, The',1996,8.1,4689);
		INSERT INTO film VALUES (34,'One Flew Over the Cuckoo''s Nest',1975,8.5,4545);
		INSERT INTO film VALUES (35,'Dr. Strangelove or: How I Learned to Stop Worrying and Love the Bomb',1963,8.6,4451);
		INSERT INTO film VALUES (39,'Terminator, The',1984,7.8,4225);
		INSERT INTO film VALUES (48,'True Lies',1994,7.3,3601);
		INSERT INTO film VALUES (94,'Total Recall',1990,7.1,2305);
		INSERT INTO film VALUES (180,'Predator',1987,7.2,1604);
		INSERT INTO film VALUES (263,'Conan the Barbarian',1981,6.9,1271);
		INSERT INTO film VALUES (321,'Twins',1988,6.3,1126);
		INSERT INTO film VALUES (334,'Last Action Hero',1993,5.9,1107);
		INSERT INTO film VALUES (410,'Dave',1993,7.4,962);
		INSERT INTO film VALUES (440,'Kindergarten Cop',1990,6.2,894);
		INSERT INTO film VALUES (471,'Running Man, The',1987,6.3,856);
		INSERT INTO film VALUES (629,'Commando',1985,6.1,673);
		INSERT INTO film VALUES (746,'Conan the Destroyer',1984,5.4,542);
		INSERT INTO film VALUES (932,'Red Heat',1988,5.8,402);
		INSERT INTO film VALUES (960,'Terminator 2: 3-D',1996,8.7,384);
		INSERT INTO film VALUES (1106,'Junior',1994,5.9,329);
		INSERT INTO film VALUES (1339,'Jingle All the Way',1996,6.0,262);
		INSERT INTO film VALUES (1551,'Raw Deal',1986,5.0,215);
		INSERT INTO film VALUES (1622,'Batman and Robin',1997,3.9,1925);
		INSERT INTO film VALUES (1644,'Red Sonja',1985,4.6,404);
		INSERT INTO film VALUES (1353,'Outrageous Fortune',1987,6.1,258);
		INSERT INTO film VALUES (975,'Night Shift',1982,6.6,377);
		INSERT INTO film VALUES (910,'Brady Bunch Movie, The',1995,6.3,412);
		INSERT INTO film VALUES (793,'Money Pit, The',1986,5.8,482);
		commit;");
		$queryListColumn->execute();
		return $queryListColumn->fetchAll(PDO::FETCH_COLUMN);
	}
*/
?>