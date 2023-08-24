<?php
    class sekil{
        public $kenar1;
        public $kenar2;
        public $kenar3;
        public $taban;
        public $yukseklik;
    }
    class dikdortgen extends sekil{
        public function alan($kenar1,$kenar2){
            return $kenar1*$kenar2;
        }
        public function cevre($kenar1,$kenar2){
            return ($kenar1+$kenar2)*2;
        }
    }
    class kare extends sekil{
        public function alan($kenar1){
            return pow($kenar1,2);
        }
        public function cevre($kenar1){
            return $kenar1*4;
        }
    }
    class ucgen extends sekil{
        public function alan($taban,$yukseklik){
            return ($taban*$yukseklik)/2;
        }
        public function cevre($kenar1,$kenar2,$kenar3){
            return $kenar1+$kenar2+$kenar3;
        }
    }
    $dikdorgen = new dikdortgen;
    $ucgen = new ucgen;
    $kare = new kare;
    echo $dikdorgen->alan(5,3)."<br>";
    echo $ucgen->cevre(3,4,5)."<br>";
    echo $kare->alan(10);
?>