<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="style/style_home.css">
	<link href='https://fonts.googleapis.com/css?family=Rock+Salt' rel='stylesheet' type='text/css'>
	<title>Tp Final</title>
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

	<!-- Nombre de films -->
	<p>
		<?= count($data) . " film(s) trouvÃ©(s) ." ?>
	</p>

	<!-- Tableau -->
	<div class="tableau">
		<table border="1">
			<thead>
				<th>
					ID <br/>
					<a href="index.php?orderBy=id&orderDirection=ASC">ðº</a>
					<a href="index.php?orderBy=id&orderDirection=DESC">ð»</a>
				</th>
				<th>
					Nom <br />
					<a href="index.php?orderBy=nom&orderDirection=ASC">ðº</a>
					<a href="index.php?orderBy=nom&orderDirection=DESC">ð»</a>
				</th>
				<th>
					AnnÃ©e <br/>
					<a href="index.php?orderBy=annee&orderDirection=ASC">ðº</a>
					<a href="index.php?orderBy=annee&orderDirection=DESC">ð»</a>
				</th>
				<th>
					Score <br/>
					<a href="index.php?orderBy=score&orderDirection=ASC">ðº</a>
					<a href="index.php?orderBy=score&orderDirection=DESC">ð»</a>
				</th>
				<th>
					NbVotants <br/>
					<a href="index.php?orderBy=nbVotant&orderDirection=ASC">ðº</a>
					<a href="index.php?orderBy=nbVotant&orderDirection=DESC">ð»</a>
				</th>
			</thead>
			<tbody>
				<?php foreach ($data as $key => $row) { ?>
					<tr>
						<td><?= $row["id"]; ?></td>

						<td><?php 	echo $row["nom"];  ?>
									<a href="index.php?target=detail&movie=<?php echo$row["id"] ?> ">ð</a>
						</td>

						<td><?= $row["annee"]; ?></td>
						<td><?= $row["score"]; ?></td>
						<td><?php echo $row["nbVotant"]; echo isset($_SESSION["user"]) ? "<a href=vote.php> â</a>" : "";         ?>  </td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</body>
</html>
