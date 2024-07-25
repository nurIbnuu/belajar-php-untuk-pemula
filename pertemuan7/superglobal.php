<?php
// SUPERGLOBAL
//    merupakan variabel global milik PHP yang berbentuk array associative, beberapa vairabel global tersebut di antaranya:
// var_dump($_GET); # array (size=0)
// var_dump($_POST); # array (size=0)
// var_dump($_SERVER); # array (size=49)
// var_dump($_SERVER['SERVER_NAME']); # string 'localhost' (length=9)

//    cara memasukkan nilai ke $_GET
// $_GET['nama'] = 'Muhammad Nur Ibnu Hubab';
// $_GET['usia'] = 18;
// var_dump($_GET);
# array (size=2)
# 'nama' => string 'Muhammad Nur Ibnu Hubab' (length=23)
# 'usia' => int 18


//    atau, memasukkan ke url(mengirim data menggunakan metode request 'get' lalu akan ditangkap oleh variabelsuperglobal $_GET)
// http://localhost/php/php-wpu/pertemuan-7/latihan1.php?nama=Muhammad%20Nur%20Ibnu%20Hubab
/* tanda tanya '?' artinya saya akan memasukkan data ke halaman ini, memasukkan ke variabel superglobal $_GET; keynya 'nama', valuenya 'Muhammad Nur Ibnu Hubab'; */
// var_dump($_GET);
# array (size=1)
# 'nama' => string 'Muhammad Nur Ibnu Hubab' (length=23)


//    menambahkan data melalui url (&)
// http://localhost/php/php-wpu/pertemuan-7/latihan1.php?nama=Muhammad%20Nur%20Ibnu%20Hubab&usia=18
// var_dump($_GET);
# array (size=2)
  # 'nama' => string 'Muhammad Nur Ibnu Hubab' (length=23)
  # 'usia' => string '18' (length=2)
// ?>

