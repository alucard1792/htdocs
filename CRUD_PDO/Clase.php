<?php 
	/**
	* 
	*/
	class Producto{

		private $datos = "";
		private $usuario = "";
		private $password = "";
		private $conexion = "";

		 function __construct($info,  $user, $pass){
		 	 $this->datos = $info;
		 	 $this->usuario = $user;
		 	 $this->password = $pass;

		 }

		 function conexion(){
		 	try {
		 		$this->conexion = new PDO($this->datos, $this->usuario, $this->password);
		 		echo "conexion exitosa<br>";

		 	} catch (PDOException $e) {
		 		echo "problema conexion: ". $e->getMessage(). "<br>";
		 		
		 	}

		 }

		 function alta($fields, $table, $argumentos){
		 	$sql = "";
		 	foreach ($argumentos as $key => $value) {
		 		$sql = "insert into $table($fields)values('".$value['nombre']."', ".$value['precio'].", '".$value['marca']."')";
		 		echo $sql;

		 	}

		 	try {
		 		$this->conexion->query($sql);
		 		return "<br> datos ingresados exitosamente";
		 	} catch (PDOException $e) {
		 		return "<br> error al ingresar los datos: ". $e;
		 		
		 	}

		 }

		 function listar($fields, $table){ //argumento tabla, lo dejamos asi parta que se puedsa usar con varias tablas.... lo mismo se aplica para fields
		 	$sql = "select $fields from $table";

		 	$consulta = $this->conexion->query($sql);
		 	$consulta = $consulta->fetchAll();

		 	$rows = explode(",", $fields);
		 	$numero_rows = count($rows);

		 	$impresion = "<tbody>";
		 	foreach ($consulta as $con) {
		 		$impresion .= "<tr>";
		 		for ($i=0; $i < $numero_rows; $i++) { 
		 			$impresion .= "<td>". utf8_encode($con[$rows[$i]]). "</td>";
		 		}
		 		$impresion .= "</tr>";
		 	}

		 	$impresion .= "</tbody>";

		 	try {
		 		echo $impresion;

		 	} catch (PDOException $e) {
		 		print_r($e);

		 	}

		}

	}

 ?>