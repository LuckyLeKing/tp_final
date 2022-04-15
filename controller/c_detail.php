<?php

require_once('lib/connexion.php');
require_once('lib/gestionTable.php');
require_once('model/m_detail.php');
require_once('view/v_details.php');

if (isset($_GET["id"]))
	{
		echo "id = " . $_GET["id"];
	}

?>