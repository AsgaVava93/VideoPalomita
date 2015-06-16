<?php
    /* 
        Classe que define una peli en sus caracteristicas
    */
    
    class Pelicula {
        private $titulo;         // name
        private $sinopsis;       // sign
	private $actores;		// pollici
        private $director;   // 800*600
        private $duracion;       // 16:9
        private $anio;          // si/no boolean
        private $genero;  // si/no boolean
        private $protagonista;          // codice

        
        public function __construct($marca, $modello, $pollici, $risoluzione, $formato, $treD, $altoparlanti, $num, $price, $photo, $description, $code) {
            $this->marca = $marca;
            $this->modello = $modello;
			$this->pollici = $pollici;
            $this->risoluzione= $risoluzione;
			$this->formato = $formato;
            $this->treD = $treD;
            $this->altoparlanti = $altoparlanti;
			$this->num = $num;
			$this->price = $price;
			$this->photo = $photo;
			$this->description = $description;
            $this->code = $code;
        }
        
        public function getMarca(){
            return $this->marca;
        }
        
        public function getModello(){
            return $this->modello;
        }
		
        public function getPollici(){
            return $this->pollici;
        }		
        
        public function getRisoluzione(){
            return $this->risoluzione;
        }
		
		public function getFormato(){
            return $this->formato;
        }
        
        public function getTreD(){
            return $this->treD;
        }
        
        public function getAltoparlanti(){
            return $this->altoparlanti;
        }
		
		public function getNum(){
			return $this->num;
		}
        
        public function getPrice(){
            return $this->price;
        }
        
		public function getPhoto(){
            return $this->photo;
        }
        
        public function getDescription(){
            return $this->description;
        }

        public function getCode(){
            return $this->code;
        }		
    }
?>