<?php
// Belajar PHP untuk PEMULA | 7. ARRAY

// Array Numeric

// Array di dalam Array/Array Multi Dimensi
$mahasiswa = [
  ['Sandika Galih', '11111', 'Teknik Informatika'],
  ['Doddy Ferdiansyah', '22222', 'Teknik Mesin'],
  ['Erik', '33333', 'Teknik Otomotif']
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
  <?php foreach($mahasiswa as $mhs) : ?>
    <ul>
      <li>Nama : <?= $mhs[0]; ?></li>
      <li>NRP : <?= $mhs[1]; ?></li>
      <li>Jurusan : <?= $mhs[2]; ?></li>
    </ul>
  <?php endforeach; ?>
</body>
</html>