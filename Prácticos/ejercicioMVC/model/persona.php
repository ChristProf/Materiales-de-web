<?php 
    class persona{
        private int $ci;
        private string $nombre;
        private int $tel;

        public function __construct(int $ci, string $nombre, int $tel){
            $this->ci=$ci;
            $this->nombre=$nombre;
            $this->tel=$tel;
        }

        public function setCI(int $ci){
            $this->ci=$ci;
        }

        public function getCI(){
            return $this->ci;
        }

        public function setNombre(string $nombre){
            $this->nombre=$nombre;
        }

        public function getNombre(){
            return $this->nombre;
        }

        public function setTel(int $tel){
            $this->tel=$tel;
        }

        public function getTel(){
            return $this->tel;
        }

    }


?>