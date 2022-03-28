<?php

class kucing{
    //atribut
    //visibilty
    public $nama;
    public $umur;
    public $warna;

    //contructor
    public function __construct($nama,$umur, $warna)
    {
       $this->nama = $nama;
       $this->umur = $umur;
       $this->warna = $warna; 
    }
    //method
    public function makan(){
        return "$this->nama sedang makan";
    }
    public function tidur(){
        return "$this->nama sedang tidur";
    }
    public function lari(){
        return "$this->nama sedang lari";
    }
}