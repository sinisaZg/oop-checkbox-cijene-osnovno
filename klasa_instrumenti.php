<?php

class instrumenti {
    public $instrument;
    function __construct($instrumenti) {
        $this->instrument=$instrumenti;
    }
    public function ukupna_cijena() {
         $zbroj=0;
         foreach ($this->instrument as $cijena) {
             $zbroj+=$cijena;
         }
         return $zbroj;
     }
}
