<?php 
	/**
	* 
	*/
	class FichaAprendizdto
	{

		private $id;
		private $fichaId;
		private $aprendizId;
		private $fechaRegistro;
		
		function __construct($id, $fichaId, $aprendizId, $fechaRegistro)
		{
			$this->id = $id;
			$this->fichaId = $fichaId;
			$this->aprendizId = $aprendizId;
			$this->fechaRegistro = $fechaRegistro;
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
    public function getFichaId()
    {
        return $this->fichaId;
    }

    /**
     * @param mixed $fichaId
     *
     * @return self
     */
    public function setFichaId($fichaId)
    {
        $this->fichaId = $fichaId;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getAprendizId()
    {
        return $this->aprendizId;
    }

    /**
     * @param mixed $aprendizId
     *
     * @return self
     */
    public function setAprendizId($aprendizId)
    {
        $this->aprendizId = $aprendizId;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getFechaRegistro()
    {
        return $this->fechaRegistro;
    }

    /**
     * @param mixed $fechaRegistro
     *
     * @return self
     */
    public function setFechaRegistro($fechaRegistro)
    {
        $this->fechaRegistro = $fechaRegistro;

        return $this;
    }
}
 ?>