<?php
session_start();
if (!isset($_SESSION['idUsuario'])) {
	echo "no existe sesión";
	if ($_SERVER["PHP_SELF"] != "/helirep/auth/index.php") {
		header("Location:/helirep/auth/index.php");
	}
}
?>
<meta charset="utf-8" />
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-red.min.css" />
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/dialog-polyfill/0.4.2/dialog-polyfill.min.css'>
<link rel="stylesheet" href="/helirep/resources/css/estilos.css" />
<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/dialog-polyfill/0.4.2/dialog-polyfill.min.js'></script>
<script src="/helirep/resources/js/breadcrumbs.js"></script>
<script src="/helirep/resources/js/dialogos.js"></script>