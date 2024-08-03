<?php
session_start();

if(!isset($_SESSION['login'])) {
  header('Location: login.php');
  exit;
}

require 'functions.php';
// PAGINATION
// konfigurasi pagination
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



// if (isset($_GET["cari"])) {
//   $jumlahDataPerHalaman=2;
//   $cari=$_GET["cari"];
//   $jumlahData=count(query("SELECT * FROM tb_ebooks WHERE title LIKE '%$cari%' OR category LIKE '%$cari%' OR authors LIKE '%$cari%'"));
//   $jumlahHalaman=ceil($jumlahData/$jumlahDataPerHalaman);
//   $halamanAktif=(isset($_GET["halaman"])) ? $_GET["halaman"] : 1; 
//   $awalData=$jumlahDataPerHalaman*$halamanAktif-$jumlahDataPerHalaman;
//   $isi=query("SELECT * FROM tb_ebooks WHERE title LIKE '%$cari%' OR category LIKE '%$cari%' OR authors LIKE '%$cari%'LIMIT $awalData,$jumlahDataPerHalaman");
// }
// else{
//   $jumlahDataPerHalaman=2;
//   $jumlahData=count(query("SELECT * FROM tb_ebooks"));
//   $jumlahHalaman=ceil($jumlahData/$jumlahDataPerHalaman);
//   $halamanAktif=(isset($_GET["halaman"])) ? $_GET["halaman"] : 1; 
//   $awalData=$jumlahDataPerHalaman*$halamanAktif-$jumlahDataPerHalaman;
//   $isi=query("SELECT * FROM tb_ebooks ORDER BY id ASC LIMIT $awalData,$jumlahDataPerHalaman");
// }



// LIMIT (mulai dari index berapa, berapa data yang ditampilkan)
$ebooks = query("SELECT * FROM tb_ebooks LIMIT $awalData, $jumlahDataPerHalaman");

// tombol cari ditekan
if(isset($_POST['search'])) {
  $ebooks = cari($_POST['keyword']); // berisi keyword yang diketikan user di input pencairan, lalu disimpan di $_POST, misal keywordnya 'matan'
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap -->
  <link href="bootstrap-5.3.3-dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" />

  <title>Halaman Admin</title>

  <style>
    @media print {
      .logout, .pencarian, .tombol-pencarian, .tambah-data, .pagination, .aksi {
        display: none;
      }
    }
  </style>
</head>
<body>
    <nav class="navbar bg-body-tertiary mb-4">
      <div class="container">
          <div class="col-5">
            <a class="navbar-brand fs-1 link-secondary link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover" href="#"> Daftar Ebook Sunnah </a>
          </div>
          <div class="text-end logout">
            <a href="logout.php" type="button" class="btn btn-secondary">
              <i class="bi bi-box-arrow-left"></i>
              Logout
            </a>
          </div>
      </div>
    </nav>

    <div class="container">
      <form action="" method="post">
        <div class="row">
          <div class="col-7 pencarian">
            <input class="form-control form-control-md" type="text" placeholder="Masukkan keyword pencarian" aria-label=".form-control-sm example" autofocus name="keyword" id="keyword" autocomplete="off">
          </div>
              
          <div class="col tombol-pencarian">
            <button type="submit" name="search" id="tombol-cari" class="btn btn-outline-secondary">
              <i class="fa fa-search" aria-hidden="true"></i>
            </button>
          </div>

          <div class="col mt-1 loader" style="margin-left: -11rem; z-index: -999; display: none;">
            <div class="spinner-border" role="status">
              <span class="sr-only"></span>
            </div>
          </div>
              
          <div class="col text-end tambah-data">
            <a href="tambah.php" type="button" class="btn btn-primary">
              <i class="bi bi-database-add"></i>
              Tambah Data
            </a>
          </div>
        </div>
      </form>

      <!-- Navigasi Pagination -->
      <div class="row mt-3 pagination">
        <div class="col">
          <nav aria-label="Page navigation example">
            <ul class="pagination">

              <!-- previous -->
              <?php if($halamanAktif > 1) : ?>
                <li class="page-item">
                  <a class="page-link" href="?halaman=<?= $halamanAktif - 1; ?>" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                  </a>
                </li>
              <?php endif; ?>

              <!-- halaman ke -->
              <?php for($i = 1; $i <= $jumlahHalaman; $i++) : ?>
                <!-- href ke halaman sendiri tidak perlu diisi -->
                <?php if($i == $halamanAktif) : ?>
                  <li class="page-item"><a class="page-link text-danger fw-bold" href="?halaman=<?= $i; ?>"><?= $i; ?></a></li>
                <?php else : ?>
                  <li class="page-item"><a class="page-link" href="?halaman=<?= $i; ?>"><?= $i; ?></a></li>
                <?php endif ; ?>
              <?php endfor; ?>

              <!-- next -->
              <?php if($halamanAktif < $jumlahHalaman) : ?>
                <li class="page-item">
                  <a class="page-link" href="?halaman=<?= $halamanAktif + 1; ?>" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                  </a>
                </li>
              <?php endif; ?>
            </ul>
          </nav>
        </div>

        <div class="col text-end">
          <a class="btn btn-warning" href="cetak.php" target="_blank" role="button">
            <i class="bi bi-printer"></i>
            Cetak
          </a>
        </div>
      </div>

      <div id="container">
        <div class="table-responsive mt-1">
          <table class="table table-bordered table-hover">
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
                <th class="aksi">
                  <center>Aksi</center>
                </th>
              </tr>
            </thead>


            <tbody>
              <?php $i = 1 + $awalData; ?>
              <?php foreach($ebooks as $ebook) : ?> 
                <tr>
                  <td>
                    <center><?= $i; ?></center>
                  </td>
                  <td>
                    <img src="image/ebooks-sunnah/<?= $ebook['picture']; ?>">
                  </td>
                  <td><?= $ebook['title']; ?></td>
                  <td><?= $ebook['category']; ?></td>
                  <td><?= $ebook['authors']; ?></td>
                  <td><?= $ebook['published']; ?></td>
                  <td><?= $ebook['year']; ?></td>
                  <td class="text-center aksi">
                    <a href="ubah.php?id=<?= $ebook['id']; ?>" type="button" class="btn btn-success btn-sm">
                      <i class="bi bi-pencil"></i>
                      Ubah
                    </a>
                    <!-- jika tombol hapus ditekan maka akan mengirimkam id dari data yang dihapus ke file hapus.php -->
                    <a href="hapus.php?id=<?= $ebook['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin mau menghapus?')">
                      <i class="bi bi-trash3"></i>
                      Hapus
                    </a>
                  </td>
                </tr>
              <?php $i++; ?>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <!-- pastikan pemanggilan jQuery sebelum script yang dibuat sendiri -->
  <script src="js/jquery-3.7.1.min.js"></script>
  <script src="js/script.js"></script>
</body>
</html>