<?php 
	/**
	* 
	*/
	class Fichadto
	{
		
		private $id;
		private $fecha_inicio;
		private $fecha_fin;
		private $cupo;
		private $programa_id;

		function __construct($id, $fecha_inicio, $fecha_fin, $cupo, $programa_id)
		{
			$this->id = $id;
			$this->fecha_inicio	= $fecha_inicio;
			$this->fecha_fin = $fecha_fin;
			$this->cupo	= $cupo;
			$this->programa_id = $programa_id;
		}

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getFechaInicio()
    {
        return $this->fecha_inicio;
    }

    /**
     * @param mixed $fecha_inicio
     *
     * @return self
     */
    public function setFechaInicio($fecha_inicio)
    {
        $this->fecha_inicio = $fecha_inicio;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getFechaFin()
    {
        return $this->fecha_fin;
    }

    /**
     * @param mixed $fecha_fin
     *
     * @return self
     */
    public function setFechaFin($fecha_fin)
    {
        $this->fecha_fin = $fecha_fin;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCupo()
    {
        return $this->cupo;
    }

    /**
     * @param mixed $cupo
     *
     * @return self
     */
    public function setCupo($cupo)
    {
        $this->cupo = $cupo;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getProgramaId()
    {
        return $this->programa_id;
    }

    /**
     * @param mixed $programa_id
     *
     * @return self
     */
    public function setProgramaId($programa_id)
    {
        $this->programa_id = $programa_id;

        return $this;
    }
}

 ?>