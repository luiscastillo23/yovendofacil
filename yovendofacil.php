<?php
	/**
	* 
	*/
	class Perez
	{
		private $nombre = "Carmen";
		private $hijo = "Fiorelia";

		public function getNombre() {
			return $this->nombre;
		}

		function __construct($nombre, $hijo)
		{
			$this->nombre = $nombre;
			$this->hijo = $hijo;
		}
	}

	class Herrera 
	{
		private $nombre = "Maria";
		private $hijo = "Jesus";
		private $nieto = "Isidro";

		public function getNombre() {
			return $this->nombre;
		}

		public function getHijo() {
			return $this->hijo;
		}

		public function getNieto() {
			return $this->nieto;
		}

		function __construct($nombre, $hijo, $nieto)
		{
			$this->nombre = $nombre;
			$this->hijo = $hijo;
			$this->nieto = $nieto;
		}
	}

	/**
	* 
	*/
	class Garcia extends Herrera
	{
		private $nombre = "Jesus";
		private $hijo = "Isidro";
		private $bisnietoGarcia = "Antonio";

		public function getNombre() {
			return $this->nombre;
		}


		public function getBisnietoGarcia() {
			return $this->bisnietoGarcia;
		}

		function __construct($nombre, $hijo)
		{
			$this->nombre = $nombre;
			$this->hijo = $hijo;
		}
	}

	class Santander extends Perez
	{
		
		private $nombre = "Fiorelia";
		private $hijo = "Antonio";

		public function getNombre() {
			return $this->nombre;
		}

		function __construct($nombre, $hijo)
		{
			$this->nombre = $nombre;
			$this->hijo = $hijo;
		}
	}

	$Herrera = new Herrera("Carmen", "Jesus", "Isidro");
	$Garcia = new Garcia("Jesus", "Isidro");
	$Santander = new Santander("Fiorelia", "Antonio");
	echo "********		Arbol Familiar de " .$Herrera->getNombre() ."  Herrera		**********" ."<br/> <br/>"; 
	echo "hijo(s): " .$Garcia->getNombre() . " Garcia" ."<br/>";
	echo "Nieto(s): " .$Herrera->getNieto() . " que a su vez es hijo de " . $Garcia->getNombre() ." y Yolanda Zambrano" . "<br/>";
	echo "Bisnieto(s): " .$Garcia->getBisnietoGarcia() . " que a su vez es hijo de " .$Herrera->getNieto() . " y " .$Santander->getNombre() . "<br/>";
?>