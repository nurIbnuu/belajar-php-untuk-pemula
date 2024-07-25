<?php
// Belajar PHP untuk PEMULA | 7. ARRAY


// Pengulangan pada Array
// for / foreach

$numbers = [2,1,3,4,5,3,5,555];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Latihan 2</title>
</head>
<body>
  <!-- for -->
  <?php for($i = 0; $i < count($numbers); $i++) : ?>
    <div><?= $numbers[$i]; ?></div>
    <!-- 
    2
    1
    3
    4
    5
    3
    5
    555
    -->
  <?php endfor; ?>

  <!-- foreach => untuk setiap elemen yang ada di dalam array lakukan sesuatu(echo). $numbers adalah arraynya, lalu kita melakukan looping untuk setiap elemennya, 'ambil 1 elemen lalu tampilkan, ambil 1 elemen lalu tampilkan', saat mengambil 1 elemen maka harus disimpan dulu dalam sebuah variabel baru variabelnya ditamppilkan, $number adalah variabel tersebut -->
  <?php foreach($numbers as $number) : ?>
    <div><?= $number; ?></div>
    <!-- 
    2
    1
    3
    4
    5
    3
    5
    555
    -->
  <?php endforeach; ?>
</body>
</html>



