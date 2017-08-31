<?php

	$connection = Connetion::getConection();

	/**
	* 
	*/
	class connection{
		
		public static function getConection(){
			$connection = null;

			try {
				$connection = new PDO("mysql:host=localhost;dbname = prueba", "root", "");
				$connection->setAttribute(PDO:: ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			} catch (PDOException $e) {
				echo "error: ", $e->getMessage();

			}
			return $connection;

		}

	}

 ?>