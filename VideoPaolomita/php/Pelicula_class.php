<?php
    /* 
        Classe que define una peli en sus caracteristicas
    */
    
    class Pelicula {
        private $titulo;         // name
        private $sinopsis;       // sign
	private $actores;		// actores
        private $director;   // 800*600
        private $duracion;       // 16:9
        private $anio;          // si/no boolean
        private $genero;  // si/no boolean
        private $protagonista;          // codice7
        private $precio;
        private $foto;
        private $code;

        
        public function __construct($titulo, $sinopsis, $actores, $director, $duracion, $anio, $genero, $protagonista, $precio, $foto, $code) {
            $this->titulo = $titulo;
            $this->sinopsis = $sinopsis;
            $this->actores = $actores;
            $this->director= $director;
            $this->duracion = $duracion;
            $this->anio = $anio;
            $this->genero = $genero;
            $this->protagonista = $protagonista;
            $this->precio = $precio;
            $this->foto = $foto;
            $this->code = $code;
        }
        
        public function getTitulo(){
            return $this->titulo;
        }
        
        public function getSinopsis(){
            return $this->sinopsis;
        }
		
        public function getActores(){
            return $this->actores;
        }		
        
        public function getDirector(){
            return $this->director;
        }
		
		public function getDuracion(){
            return $this->duracion;
        }
        
        public function getAnio(){
            return $this->anio;
        }
        
        public function getGenero(){
            return $this->genero;
        }
		
	public function getProtagonista(){
		return $this->protagonista;
	}
        
        public function getPrecio(){
            return $this->precio;
        }
        
	public function getFoto(){
            return $this->foto;
        }		
	public function getCode(){
            return $this->code;
        }		
    }
?>