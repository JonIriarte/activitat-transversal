<?php
class Categoria{
        
        private $id; 
        private $max; 
        private $min; 
        private $nombre;  
    //Constructor
    public function __construct(){

    }

        /**
         * Get the value of id
         */ 
        public function getId()
        {
                return $this->id;
        }

        /**
         * Set the value of id
         *
         * @return  self
         */ 
        public function setId($id)
        {
                $this->id = $id;

                return $this;
        }

        /**
         * Get the value of max
         */ 
        public function getMax()
        {
                return $this->max;
        }

        /**
         * Set the value of max
         *
         * @return  self
         */ 
        public function setMax($max)
        {
                $this->max = $max;

                return $this;
        }

        /**
         * Get the value of min
         */ 
        public function getMin()
        {
                return $this->min;
        }

        /**
         * Set the value of min
         *
         * @return  self
         */ 
        public function setMin($min)
        {
                $this->min = $min;

                return $this;
        }

        /**
         * Get the value of nombre
         */ 
        public function getNombre()
        {
                return $this->nombre;
        }

        /**
         * Set the value of nombre
         *
         * @return  self
         */ 
        public function setNombre($nombre)
        {
                $this->nombre = $nombre;

                return $this;
        }
}

?>