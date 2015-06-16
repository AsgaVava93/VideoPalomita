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
        private $es_actor;
        private $es_director;
        private $code;
        
        function __construct($nombre, $apellido, $lugarNacimiento, $fechaNacimiento, $lugarMuerte, $fechaMuerte, $generoPelicula, $biografia, $oscar, $foto, $es_actor, $es_director, $code) {
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
            $this->es_actor = $es_actor;
            $this->es_director = $es_director;
            $this->code = $code;
        }
        function getNombre() {
            return $this->nombre;
        }

        function getApellido() {
            return $this->apellido;
        }

        function getLugarNacimiento() {
            return $this->lugarNacimiento;
        }

        function getFechaNacimiento() {
            return $this->fechaNacimiento;
        }

        function getLugarMuerte() {
            return $this->lugarMuerte;
        }

        function getFechaMuerte() {
            return $this->fechaMuerte;
        }

        function getGeneroPelicula() {
            return $this->generoPelicula;
        }

        function getBiografia() {
            return $this->biografia;
        }

        function getOscar() {
            return $this->oscar;
        }

        function getFoto() {
            return $this->foto;
        }

        function getEs_actor() {
            return $this->es_actor;
        }

        function getEs_director() {
            return $this->es_director;
        }

        function getCode() {
            return $this->code;
        }


    }
?>