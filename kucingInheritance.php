<?php
//mmebuat class induk, mamalia
class mamalia
{
    public $warnaRambut;
    public $jenis;

    public function jenis_mamalia()
    {
        return "hewan mamalia memiliki ciri-ciri";
    }
}

//turunkan class mamalia ke kucing
class kucing extends mamalia
{
    public function lihat_jenis()
    {
        return "warna rambutnya $this->warnaRambut, jenisnya $this->jenis";
    }
}

//buat objek dair class kucing (instansiasi)
$kucing2 = new kucing();

//isi property objek 
$kucing2->warnaRambut = "putih";
$kucing2->jenis = "persia";

//panggil method objek
echo $kucing2->jenis_mamalia();
echo "<br/>";
echo $kucing2->lihat_jenis();
?>