<?php 
    class User{
     private $nome;
     private $genero;
     private $biografia;
     private $img;
     private $sexo;
     private $revelacao;
     private $recomendar;
     private $live;
     private $menu;
        
        public function getNome(){
            return $this->nome;
        }
        
        
        public function getGenero(){
            return $this->genero;
        }
        
        
        public function getBiografia(){
            return $this->biografia;
        }
        
        
        public function getSexo(){
            return $this->sexo;
        }
        
        
        public function getImg(){
            return $this->img;
        }
        
        public function getRevelacao(){
            return $this->revelacao;
        }
        
        public function getRecomendar(){
            return $this-> recomendar;
        }
        
        public function getLive(){
            return $this->live;
        }
      
        public function getMenu(){
            return $this->menu;
        }
      
      
      
      
      
        public function setNome($a){
             $this->nome = $a;
        }
        
        public function setGenero($a){
             $this->genero = $a;
        }
        
        public function setBiografia($a){
             $this->biografia = $a;
        }
        public function setSexo($a){
             $this->sexo = $a;
        }
        
        public function setImg($a){
             $this->img = $a;
        }
        public function setRevelacao($a){
             $this->revelacao = $a;
        }
        public function setRecomendar($a){
             $this->recomendar = $a;
        }
        public function setLive($a){
             $this->live = $a;
        }
        public function setMenu($a){
             $this->menu = $a;
        }
    }

?>