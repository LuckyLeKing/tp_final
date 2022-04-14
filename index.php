<?php

	// afficher les erreurs
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);

	session_start();

	include_once("lib/connexion.php");
	include_once("lib/createdb.php");

	$target = isset($_GET["target"]) ? $_GET["target"] : "home"; 

	require_once("controller/c_" . $target . ".php");

?>
