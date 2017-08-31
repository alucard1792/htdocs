<?php 
	/**
	* 
	*/
	class CentralTelefonica{

		private $numeroTelefono = 0;
		private $numeroDestino = 0;
		private $franjaHoraria = 0;
		private $valorMinutoFijo = 200;
		private $valorMinutoCelular = 0;
		private $isNumeroCelular = null;


		private $numerosOrigen = array();
		private $historialNumeros = array();
		private $duracionLlamada = array();
		private $costeTotal = array();


		public function getNumeroTelefono(){
			return $this->numeroTelefono;

		}

		public function getNumeroDestino(){
			return $this->numeroDestino;

		}

		public function getFranjaHoraria(){
			return $this->franjaHoraria;
			
		}

		public function getValorMinutoCelular(){
			return $this->valorMinutoCelular;
			
		}

		public function getIsNumeroCelular(){
			return $this->isNumeroCelular;
			
		}


		public function getNumerosOrigen($indexNumerosOrigen){
			return $this->numerosOrigen[$indexNumerosOrigen];
			
		}

		public function getHistorialNumeros($indexHistorialNumeros){
			return $this->historialNumeros[$indexHistorialNumeros];
			
		}

		public function getDuracionLlamada($indexDuracionLlamada){
			return $this->duracionLlamada[$indexDuracionLlamada];
			
		}

		public function getCosteTotal($indexCosteTotal){
			return $this->costeTotal[$indexCosteTotal];
			
		}

		/*----------------fin get---------------------*/

		public function setNumeroTelefono($numeroTelefono){
			$this->numeroTelefono = $numeroTelefono;

		}

		public function setNumeroDestino($numeroDestino){
			return $this->numeroDestino = $numeroDestino;

		}

		public function setFranjaHoraria($franjaHoraria){
			$this->franjaHoraria = $franjaHoraria;
			
		}

		public function setValorMinutoCelular($valorMinutoCelular){
			return $this->valorMinutoCelular = $valorMinutoCelular;
			
		}

		public function setIsNumeroCelular($isNumeroCelular){
			return $this->isNumeroCelular = $isNumeroCelular;
			
		}


		public function setNumerosOrigen($indexNumerosOrigen){
			array_push($this->numerosOrigen, $indexNumerosOrigen);
			
		}

		public function setHistorialNumeros($historialNumeros){
			array_push($this->historialNumeros, $historialNumeros);
			
		}

		public function setDuracionLlamada($duracionLlamada){
			array_push($this->duracionLlamada, $duracionLlamada);
			
			
		}

		public function setCosteTotal($costeTotal){
			array_push($this->costeTotal, $costeTotal);
			
			
		}
		
		/*----------------fin set---------------------*/

		public function determinarTipoNumero($numeroDestino){

			if ($numeroDestino >= 100000 && $numeroDestino <= 999999) {
				$this->setNumeroTelefono($numeroDestino);
				$this->setIsNumeroCelular(false);
				echo "es fijo";
				return $this->getNumeroTelefono();

			}elseif ($numeroDestino >= 100000000 && $numeroDestino <= 999999999) {
				$this->setNumeroTelefono($numeroDestino);
				$this->setIsNumeroCelular(true);
				echo "es celular";
				return $this->getNumeroTelefono();

			}else{
				echo "numero invalido, intentelo de nuevo";
				$this->setIsNumeroCelular(null);
				return null;

			}

		}

		public function llamar($numeroTelefono, $numeroDestino, $duracionLlamada){
			$this->determinarTipoNumero($numeroDestino);

			if($this->getIsNumeroCelular()){

				switch ($this->franjaHoraria) {

					case $this->franjaHoraria == 1:
						echo "franja 1<br>";
						$this->setFranjaHoraria(1);
						$this->setValorMinutoCelular(200);
						$this->guardarRegistros($numeroTelefono, $numeroDestino, $duracionLlamada);
								
						break;

					case $this->franjaHoraria == 2:
						echo "franja 2<br>";
						$this->setFranjaHoraria(2);	
						$this->setValorMinutoCelular(150);
						$this->guardarRegistros($numeroTelefono, $numeroDestino, $duracionLlamada);
						
						break;

					case $this->franjaHoraria == 3:
						echo "franja 3<br>";
						$this->setFranjaHoraria(3);
						$this->setValorMinutoCelular(100);
						$this->guardarRegistros($numeroTelefono, $numeroDestino, $duracionLlamada);

						break;

					default:
						echo "error franja horaria";

						break;

				}

			}elseif ($this->getIsNumeroCelular() === false) {
				echo "es fijo";
			
			}else{
				echo "buena bobo";

			}

		}

		public function guardarRegistros($numeroTelefono, $numeroDestino, $duracionLlamada){
			$temp;

			$this->setNumerosOrigen($numeroTelefono);
			$this->setHistorialNumeros($numeroDestino);
			$this->setDuracionLlamada($duracionLlamada);
			echo $tamano = count($this->numerosOrigen);

			if ($this->getIsNumeroCelular()) {
				for ($i=0; $i < $tamano; $i++) { 
					$temp += ($this->getValorMinutoCelular() * $this->duracionLlamada[$i]);
					

				}
				$this->setCosteTotal($temp);
				echo $this->getCosteTotal(($tamano - 1));

			}else{


			}


		}

	}

 ?>