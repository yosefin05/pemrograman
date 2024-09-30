<?php
//membuat class mamalia
class mamalia
{
    //properti dengan hak akses protected
    private $jenis = "Anggora";

    public function tampilkan_jenis()
    {
        return $this->jenis;
    }
}

//buat class kucing
class kucing extends mamalia
{
    public function tampilkan_jenis()
    {
        return $this->jenis;
    }
}
//buat objek dari class laptop (instansiasi)
$mamalia1 = new mamalia();
$kucing1 = new kucing();

//jalankan method dari class komputer
echo $mamalia1->tampilkan_jenis(); //"Anggora"

//jalankan method dari class laptop (error)
echo $kucing1->tampilkan_jenis();
?>