<?php
// Belajar PHP untuk PEMULA | 8. ASSOCIATIVE ARRAY

// Array associative = key/indexnya adalah string yang kita buat sendiri.

// print_r => print secara recursive. print == echo.



//    Array associative
$mahasiswa = [
  'nama' => 'Sandika Galih',
  'nrp' => '043040023',
  'email' => 'sandikagalih@unpas.ac.id',
  'jurusan' => 'Teknik Informatika'
];
//    Cara menampilkan 1 element array associative
echo $mahasiswa['jurusan']; # Teknik Informatika





echo '<br>';
//    Array associative bersarang
$mahasiswa1 = [
  [
  'nama' => 'Sandika Galih',
  'nrp' => '043040023',
  'email' => 'sandikagalih@unpas.ac.id',
  'jurusan' => 'Teknik Informatika'
  ],
  [
  'nama' => 'Doddy Firmansyah',
  'nrp' => '033040001',
  'email' => 'doddy@gmail.com',
  'jurusan' => 'Teknik Industri',
  'tugas' => [80, 85, 90]
  ]
];
//    Cara menampilkan 1 element array associative bersarang
echo $mahasiswa1[1]['nama']; # Doddy Firmansyah
echo '<br>';
echo $mahasiswa1[1]['tugas'][2]; # 90















$mahasiswa2 = [
  [
  # terbalik urutannya tidak masalah karena keynya associative
  'nrp' => '043040023',
  'nama' => 'Sandika Galih',
  'jurusan' => 'Teknik Informatika',
  'email' => 'sandikagalih@unpas.ac.id',
  'gambar' => 'img1.jpg',
  ],
  [
  'nama' => 'Doddy Firmansyah',
  'nrp' => '033040001',
  'email' => 'doddy@gmail.com',
  'jurusan' => 'Teknik Industri',
  'gambar' => 'img2.jpg',
  ],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Latihan 3</title>
</head>
<body>
  <h1>Daftar Mahasiswa 2</h1>
  <?php foreach($mahasiswa2 as $mhs2) : ?>
    <ul>
      <li>Nama : <?= $mhs2['nama']; ?></li>
      <li>NRP : <?= $mhs2['nrp']; ?></li>
      <li>Email : <?= $mhs2['email']; ?></li>
      <li>Jurusan : <?= $mhs2['jurusan']; ?></li>
      <li>
        <img src='img/<?= $mhs2['gambar']; ?>'>
      </li>
    </ul>
  <?php endforeach; ?>
</body>
</html>