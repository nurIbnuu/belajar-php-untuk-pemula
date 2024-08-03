<?php

use Mpdf\Tag\Q;

require_once __DIR__ . '/vendor/autoload.php';
require 'functions.php';
$jumlahDataPerHalaman = 2;
// $result = mysqli_query($conn, "SELECT * FROM tb_ebooks");
// $jumlahData = mysqli_num_rows($result); ATAU
$jumlahData = count(query("SELECT * FROM tb_ebooks"));
$jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);
/* if(isset($_GET['halaman'])) {
  $halamanAktif = $_GET['halaman'];
} else {
  $halamanAktif = 1;
} ATAU */
$halamanAktif = (isset($_GET['halaman']) ? $_GET['halaman'] : 1);
// halaman aktif = halaman 2, index awal data = 2, jika jumlah data per halaman = 2
// halaman aktif = halaman 3, index awal data = 4, jika jumlah data per halaman = 2
// halaman aktif = halaman 2, index awal data = 3, jika jumlah data per halaman = 3
$awalData = ($jumlahDataPerHalaman * $halamanAktif) - $jumlahDataPerHalaman;

$ebooks = query("SELECT * FROM tb_ebooks LIMIT $awalData, $jumlahDataPerHalaman");

$mpdf = new \Mpdf\Mpdf();
$html = '<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Ebook Sunnah</title>
  <link rel="stylesheet" href="css/print.css"></link>
</head>
<body>
  <h1>Daftar Ebook Sunnah</h1>
  <table class="table table-bordered table-hover" border="1" cellpadding="10" cellspacing="0">
            <thead>
              <tr>
                <th>
                  <center>No.</center>
                </th>
                <th>
                  <center>Gambar</center>
                </th>
                <th>
                  <center>Judul</center>
                </th>
                <th>
                  <center>Kategori</center>
                </th>
                <th>
                  <center>Penulis</center>
                </th>
                <th>
                  <center>Diterbitkan oleh</center>
                </th>
                <th>
                  <center>Terbit Tahun</center>
                </th>
              </tr>
            </thead>';

            $i = 1;
            foreach($ebooks as $ebook) {
              $html .= 
              '<tr>
                <td>'. $i++ .'</td>
                <td><img src="image/ebooks-sunnah/'. $ebook["picture"] .'" width="100"></td>
                <td>'. $ebook['title'] .'</td>            
                <td>'. $ebook['category'] .'</td>            
                <td>'. $ebook['authors'] .'</td>            
                <td>'. $ebook['published'] .'</td>            
                <td>'. $ebook['year'] .'</td>            
              </tr>';  
                
              }


$html .= '</table>
</body>
</html>';
$mpdf->WriteHTML($html);
$mpdf->Output('daftar-ebook-sunnah.pdf', \Mpdf\Output\Destination::INLINE);
?>
