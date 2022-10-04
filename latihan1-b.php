<?php
class Mobil {
     public $nama;
     public $merk;

     function getInfo($a) {
        echo "Nama Mobil = " . $a->nama . "<br>";
        echo "Merk = " . $a->merk . "<br>";
     }
}

$mobil = new Mobil();
$mobil->nama = "dnveh";
$mobil->merk = "jdwdwk";
$mobil->getInfo($mobil);