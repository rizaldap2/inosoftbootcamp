<?php 
    class planefigure{
        public function area(){
            return 0;
        }
        public function circumference(){
            return 0;
        }
        public function enlarge($sisi,$n){
            return $sisi*$n;
        }
        public function shrink($sisi, $n){
            return $sisi/$n;
        }
        public function description($bangundatar, $luas, $keliling){
            return "Bangun datar ini adalah " .$bangundatar. " yang memiliki luas".$luas. " dan keliling ".$keliling ;
        }
    }
    class square extends planefigure{
        public float $sisi;
        public function __construct($sisi){
            $this->sisi = $sisi;
        }
        public function area(){
            return $this->sisi * $this->sisi;
        }
        public function circumference(){
            return $this->sisi * 4;
        }


    }
    class rectangle extends planefigure{
        public float $panjang;
        public float $lebar;
        public function __construct($panjang, $lebar){
            $this->panjang = $panjang;
            $this->lebar = $lebar;
        }
        public function area(){
            return $this->panjang * $this->lebar;
        }
        public function circumference(){
            return ($this->panjang + $this->lebar) * 2;
        }
        
    }
    class circle extends planefigure{
        public float $jari;
        public function __construct($jari){
            $this->jari = $jari;
        }
        public function area(){
            return $this->jari * $this->jari * 3.14;
        }
        public function circumference(){
            return $this->jari * 2 * 3.14;
        }
        
    }


?>