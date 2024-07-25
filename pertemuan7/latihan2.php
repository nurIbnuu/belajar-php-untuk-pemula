<?php
// Belajar PHP untuk PEMULA | 9. GET & POST

// Cek apakah tidak ada data di $_GET
if(!isset($_GET['Picture']) ||
!isset($_GET['Title']) ||
!isset($_GET['Category']) ||
!isset($_GET['Authors']) ||
!isset($_GET['Published']) ||
!isset($_GET['Year'])) { // jika Title belum diset
  // redirect
  header("Location: latihan1.php");
  exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail E-Book</title>
</head>
<body>
  <h1>Detail E-Book</h1>

  <a href="latihan1.php">Kembali ke Daftar E-Book Sunnah</a>
  
  <ul style='list-style-type: none'>
    <li>
      <img src="image/ebooks-sunnah/<?= $_GET['Picture']; ?>">
    </li>
    <li>Judul : <?= $_GET['Title']; ?></li>
    <li>Kategori : <?= $_GET['Category']; ?></li>
    <li>Penulis : <?= $_GET['Authors']; ?></li>
    <li>Diterbitkan oleh : <?= $_GET['Published']; ?></li>
    <li>Terbit tahun : <?= $_GET['Year']; ?></li>
  </ul>
</body>
</html>