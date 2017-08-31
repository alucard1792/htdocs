<?php 
	require_once 'Agenda.php';
	require_once 'Contacto.php';

	$agenda = new Agenda();

	$agenda -> addContacto(new Contacto("juan", "112233"));
	$agenda -> addContacto(new Contacto("pedro", "445566"));
	$agenda -> addContacto(new Contacto("diaz", "778899"));
	
	print_r($agenda);

 ?>