<?php
function penjumlahan($bilangan1, $bilangan2) {
    $hasil = $bilangan1 + $bilangan2;
    return $hasil;
}

// Panggil fungsi dengan dua bilangan bebas
$hasil_penjumlahan = penjumlahan(5, 7);

// Tampilkan hasilnya
echo "Hasil penjumlahan: " . $hasil_penjumlahan;
?>