<?php

	require_once("model/m_home.php");

	$orderBy = "id";

	$orderDirection = "ASC";

	if (isset($_GET["orderBy"]))
	{
		if (in_array($_GET["orderBy"], $listOrderBy))
		{
			$orderBy = $_GET["orderBy"];
		}

	}

	if (isset($_GET["orderDirection"]))
	{
		if (in_array($_GET["orderDirection"], $listOrderDirection))
		{
			$orderDirection = $_GET["orderDirection"];
		}
	}

	include_once("lib/gestionTable.php");
	$data = request($orderBy, $orderDirection);

	require_once("view/v_home.php");

?>