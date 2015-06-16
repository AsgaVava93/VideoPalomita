<?php
    class Personaje {
        private $nombre;         // name
        private $apellido;       // sign
	private $lugarNacimiento;		// actores
        private $fechaNacimiento;   // 800*600
        private $lugarMuerte;       // 16:9
        private $fechaMuerte;          // si/no boolean
        private $generoPelicula;  // si/no boolean
        private $biografia;          // codice7
        private $oscar;
        private $foto;
        private $pareja;
        private $es_actor;
        private $es_director;
        private $code;
        
        public function __construct($nombre, $apellido, $lugarNacimiento, $fechaNacimiento, $lugarMuerte, $fechaMuerte, $generoPelicula, $biografia, $oscar, $foto, $pareja, $es_actor, $es_director, $code) {
            $this->nombre = $nombre;
            $this->apellido = $apellido;
            $this->lugarNacimiento = $lugarNacimiento;
            $this->fechaNacimiento = $fechaNacimiento;
            $this->lugarMuerte = $lugarMuerte;
            $this->fechaMuerte = $fechaMuerte;
            $this->generoPelicula = $generoPelicula;
            $this->biografia = $biografia;
            $this->oscar = $oscar;
            $this->foto = $foto;
            $this->pareja = $pareja;
            $this->es_actor = $es_actor;
            $this->es_director = $es_director;
            $this->code = $code;
        }
        
        public function getNombre() {
        return $this->nombre;
    }

    public function getApellido() {
        return $this->apellido;
    }

    public function getLugarNacimiento() {
        return $this->lugarNacimiento;
    }

    public function getFechaNacimiento() {
        return $this->fechaNacimiento;
    }

    public function getLugarMuerte() {
        return $this->lugarMuerte;
    }

    public function getFechaMuerte() {
        return $this->fechaMuerte;
    }

    public function getGeneroPelicula() {
        return $this->generoPelicula;
    }

    public function getBiografia() {
        return $this->biografia;
    }

    public function getOscar() {
        return $this->oscar;
    }

    public function getFoto() {
        return $this->foto;
    }

    public function getEs_actor() {
        return $this->es_actor;
    }

    public function getPareja() {
        return $this->pareja;
    }

    public function getEs_director() {
        return $this->es_director;
    }

    public function getCode() {
        return $this->code;
    }

}
?>