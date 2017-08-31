<?php 

	require_once 'Aprendiz.php';
	require_once 'Instructor.php';
	require_once 'PersonalAdministrativo.php';

		$aprendiz;
		$instructor;
		$personalAdministrativo;

		$aprendiz1 = new Aprendiz('david', 'zamora', 123, false, true, 2016, 1124922);
		$instructor1 = new Instructor('rodrigo', 'aranda', 456, false, true, 2012, 'ADSI');
		$instructor2 = new Instructor('armando', 'poveda', 456, false, false, 2012, 'ADSI');
		$personalAdministrativo1 = new PersonalAdministrativo('edgar', 'zamora', 789, true, false, 2015, 'finanzas');

		echo $aprendiz1, "<br>";
		echo $instructor1, "<br>";
		echo $instructor2, "<br>";
		echo $personalAdministrativo1, "<br>";

 ?>