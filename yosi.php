<?php
// soal 1
$angka1 = 9;
$angka2 = 3;

$penjumlahan = $angka1 + $angka2;
$pengurangan = $angka1 - $angka2;
$perkalian = $angka1 * $angka2;
$pembagian = $angka1 / $angka2;

echo "Hasil Penjumlahan : " . $penjumlahan . "<br>";
echo "Hasil Pengurangan : " . $pengurangan . "<br>";
echo "Hasil Perkalian : " . $perkalian . "<br>";
echo "Hasil Pembagian : " . $pembagian . "<br>";

$sisa_pembagian = $angka1 % $angka2;
echo "Sisa Pembagian: " . $sisa_pembagian;
// soal 2
$x = 10;
$x += 5;
echo"<br>";
echo "Nilai x setelah ditambahkan 5: " . $x . "<br>";
$x -= 2;
echo "Nilai x setelah dikurangkan 2: " . $x;
$star=5;
for($a=$star;$a>0;$a--){
for($b=$star;$b>=$a;$b--){
    echo "*";
    }
echo "<br>";
}