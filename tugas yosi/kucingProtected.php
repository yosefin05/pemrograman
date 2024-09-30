<?php
//membuat class 
class mamalia
{
    //rroperty dengan hak akses protected
    protected $jenis = "Persia Himalaya";
}

//buat class laptop
class kucing extends mamalia
{
    public function tampilkan_jenis()
    {
        return $this->jenis;
    }
}
//buat objek dari class laptop (instansiasi)
$kucing1 = new kucing();

//jalankan method
echo $kucing1->tampilkan_jenis(); // "Persia Himalaya"
?>