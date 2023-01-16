<?php 
    class kalkulator{

        public float $daya ;
        public float $konsumsi ;
        public function __construct(){
            $this->daya = 0;
            $this->konsumsi=10;
        }
        public function penjumlahan($a, $b){
            $this->kurangdaya();
            return $a + $b;
        }
        public function pengurangan($a, $b){
            $this->kurangdaya();
            return $a - $b;
        }
        public function perkalian($a, $b){
            $this->kurangdaya();
            return $a * $b;
        }
        public function pembagian($a, $b){
            $this->kurangdaya();
            return $a / $b;
        }
        public function isidaya($jumlah){
            $this->daya += $jumlah;
        }
        public function kurangdaya(){
            if ($this->daya > $this->konsumsi){
                $this->daya -= $this->konsumsi;
            }
            else{
                echo "Daya habis";
                return;
            }
        }
    }

    class kalkulatorhemat extends kalkulator{
        public function __construct(){
            $this->daya = 0;
            $this->konsumsi = 5;
        }
    }

    $kalkulator = new kalkulator();
    $kalkulator -> isidaya(60);
    echo "hasil :".$kalkulator -> penjumlahan(10, 10). PHP_EOL;
    echo "hasil :".$kalkulator -> pengurangan(10, 10). PHP_EOL;
    echo "hasil :".$kalkulator -> perkalian(10, 10). PHP_EOL;
    echo "hasil :".$kalkulator -> pembagian(10, 10). PHP_EOL;
    echo "hasil :".$kalkulator -> perkalian(10, 10). PHP_EOL;
    echo "hasil :".$kalkulator -> pembagian(10, 10). PHP_EOL;
    echo "daya :".$kalkulator -> daya. " %" .PHP_EOL;





?>