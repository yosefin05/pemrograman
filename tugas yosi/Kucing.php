<?php
//mendefinisikan class
class Kucing
{
    //menambahkan atribut
    public $jenis;
    public $warnaMata;
    public $warnaRambut;
    //method atau fungsi
    public function infoKucing()
    {
        return "kucing ini memiliki beberapa jenis yaitu $this->jenis, dan memiliki warna mata this $this->warnaMata, dan memiliki warna rambut yang sering disebut bulu $this->warnaRambut";
    }
}

//membuat objek dari class kucing
$kucing1 = new Kucing();

//mengatur nilai atribut objek
$kucing1->jenis = "Persia Himalaya";
$kucing1->warnaMata = "Biru";
$kucing1->warnaRambut = "Putih";

//memanggil method objek
echo $kucing1->infoKucing();
?>