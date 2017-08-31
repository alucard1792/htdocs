<?php 
	/**
	* 
	*/
	class Aprendizdto
	{
		private $id;
		private $documento;
		private $nombre;
		private $apellido;
		private $correo;

		function __construct($id, $documento, $nombre, $apellido, $correo)
		{
			$this->id = $id;
			$this->documento = $documento;
			$this->nombre = $nombre;
			$this->apellido = $apellido;
			$this->correo = $correo;
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
    public function getDocumento()
    {
        return $this->documento;
    }

    /**
     * @param mixed $documento
     *
     * @return self
     */
    public function setDocumento($documento)
    {
        $this->documento = $documento;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * @param mixed $nombre
     *
     * @return self
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getApellido()
    {
        return $this->apellido;
    }

    /**
     * @param mixed $apellido
     *
     * @return self
     */
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCorreo()
    {
        return $this->correo;
    }

    /**
     * @param mixed $correo
     *
     * @return self
     */
    public function setCorreo($correo)
    {
        $this->correo = $correo;

        return $this;
    }
}

 ?>