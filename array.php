<?php
    //menambahkan array asosiatif
    $namaBunga = [
        ["Nama Bunga"=> "Anggrek Bulan", "Nama Latin"=>"Phalaenopsis amabilis"],
        ["Nama Bunga"=> "Bugenvil", "Nama Latin"=>"Bougainvillea"],
        ["Nama Bunga"=> "Matahari", "Nama Latin"=>"Mucuna bennettii"]
    ];
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemrograman Array</title>
</head>
<body>
    <!--akan menampilkan nama bunga yang diambil dari array di atas-->
    <h3>Nama Bunga dan Nama Latinnya</h3>
    <!--menggunakan looping foreach-->
    <?php foreach ($namaBunga as $bunga) : ?>
        <ul>
            <li>Nama Bunga : <?= $bunga["Nama Bunga"]; ?></li>
            <li>Nama Latin Bunga : <?= $bunga["Nama Latin"]; ?></li>
        </ul>
    <?php endforeach; ?>
</body>
