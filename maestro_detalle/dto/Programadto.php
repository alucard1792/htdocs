<?php 
	/**
	* 
	*/
	class Programadto
	{

		private $id;
		private $nombre;
		
		function __construct($id, $nombre)
		{
			$this->id = $id;
			$this->nombre;
			
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
}
 ?>