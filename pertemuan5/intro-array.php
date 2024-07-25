<?php
// Belajar PHP untuk PEMULA | 7. ARRAY

// Array => Pasangan key dan value/key and value pair; key adalah index yang dimulai dari 0
// Variabel yang dapat menyimpan banyak nilai
// Array numeric = key/indexnya angka.

//    Membuat array
//      Cara lama
$hari = array('Senin', 'Selasa', 'Rabu');
//      Cara baru
$bulan = ['Januari', 'Februari', 'Maret'];
//      Beda tipe data
$array = [123, 'String', true];
# $hari, $bulan, $array; ibarat tempat pensil.

//    Memanggil array
//      Menampilkan element array Versi developer
var_dump($hari);
/* D:\xampp\htdocs\php\php-wpu\Belajar_PHP_untuk_Pemula2\pertemuan5\latihan1.php:17:
array (size=3)
  0 => string 'Senin' (length=5)
  1 => string 'Selasa' (length=6)
  2 => string 'Rabu' (length=4) */
echo "<br>";

print_r($bulan);
/* Array ( [0] => Januari [1] => Februari [2] => Maret ) */
echo "<br>";

//      Menampilkan untuk dilihat user
//      Menampilkan 1 element (hanya bisa 1 element jika pakai 'echo')
echo $hari[0];
/* Senin */
echo "<br>";

//      Menampilkan semua element array
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Latihan 1</title>
  <!-- <style>
    .kotak {
      width: 30px;
      height: 30px;
      background-color: salmon;
      text-align: center;
      line-height: 30px;
      margin: 3px;
      float: left;
    } -->
  </style>
</head>
<body>
  <?php $numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9]; ?>
  <?php foreach($numbers as $number) : ?>
    <div class="kotak"><?= $number; ?></div>
    <!-- 
    1
    2
    3
    4
    5
    6
    7
    8
    9 -->
  <?php endforeach; ?>
</body>
</html>






<?php
//    Array Muliti Dimensi/Array Bersarang
echo "<br>";
$numbers1 = [
  [1,2,3],
  [4,5,6],
  [7,8,9]
];
echo "<br>";
//      Cara mencetak 1 element array multi dimensi, contoh: 6
echo $numbers1[1][2];
/* 6 */
echo "<br>";
//      Cara mencetak semua element array multi dimensi
foreach($numbers1 as $number1) :
  foreach($number1 as $nbr1) :
    echo $nbr1;
    /* 123456789 */
  endforeach;
endforeach;
?>



<?php
$mapel2 = ['Matematika', 'IPA'];
// var_dump($mapel2);
/* D:\xampp\htdocs\php\php-wpu\Belajar_PHP_untuk_Pemula2\pertemuan5\latihan1.php:104:
array (size=2)
  0 => string 'Matematika' (length=10)
  1 => string 'IPA' (length=3) */

// Menamabah element array
$mapel2[] = 'Bahasa Indonesia';
var_dump($mapel2);
/* D:\xampp\htdocs\php\php-wpu\Belajar_PHP_untuk_Pemula2\pertemuan5\latihan1.php:112:
array (size=3)
  0 => string 'Matematika' (length=10)
  1 => string 'IPA' (length=3)
  2 => string 'Bahasa Indonesia' (length=16) */