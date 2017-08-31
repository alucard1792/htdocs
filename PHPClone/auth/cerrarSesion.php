<?php

if ($_SESSION['token'] == $_GET['token']) {
	session_unset();
	session_destroy();
	header("Location:/helirep/auth/index.php");
}
?>