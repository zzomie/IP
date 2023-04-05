<?php

class Auto{
    private $marka, $godiste, $proizvodjac;

    function __construct($marka, $godiste, $proizvodjac){
        $this->marka=$marka;
        $this->godiste=$godiste;
        $this->proizvodjac=$proizvodjac;
    }

    function getMarka(){
        return $this->marka;
    }

    function getGodiste(){
        return $this->godiste;
    }

    function getProizvodjac(){
        return $this->proizvodjac;
    }

}
?>