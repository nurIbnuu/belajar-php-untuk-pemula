<?php
session_start();

if(!isset($_SESSION['login'])) {
  header('Location: login.php');
  exit;
}

require 'functions.php';
$ebooks = query('SELECT * FROM tb_ebooks');

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

  <!-- Font Awesome -->
  <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" />

  <title>Halaman Admin</title>
</head>
<body>
    <nav class="navbar bg-body-tertiary mb-2">
      <div class="container">
        <a class="navbar-brand fs-1" href="#"> Daftar Ebook Sunnah </a>
      </div>
    </nav>

    <div class="container">

      <div class="row">
        <div class="col">
          <figure>
            <blockquote class="blockquote">
              <p>Berisi data yang disimpan di database.</p>
            </blockquote>
            <figcaption class="blockquote-footer">
              CRUD <cite title="Source Title">Create Read Update Delete</cite>
            </figcaption>
          </figure>
        </div>

        <div class="col text-end mt-2">
          <a href="logout.php" type="button" class="btn btn-secondary">
            <i class="fa fa-times" aria-hidden="true"></i>
              Logout
          </a>
        </div>
      </div>

      <form action="" method="post">
        <div class="row">
          <div class="col">
            <input class="form-control form-control-md" type="text" placeholder="Masukkan keyword pencarian" aria-label=".form-control-sm example" autofocus name="keyword">
          </div>
              
          <div class="col">
            <button type="submit" name="search" class="btn btn-outline-secondary">
              <i class="fa fa-search" aria-hidden="true"></i>
            </button>
          </div>
              
          <div class="col text-end">
            <a href="tambah.php" type="button" class="btn btn-primary">
              <i class="fa fa-plus"></i>
              Tambah Data
            </a>
          </div>
        </div>
      </form>


      <div class="table-responsive mt-4">
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
              <th>
                <center>Aksi</center>
              </th>
            </tr>
          </thead>


          <tbody>
            <?php $i = 1; ?>
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
                <td class="text-center">
                  <a href="ubah.php?id=<?= $ebook['id']; ?>" type="button" class="btn btn-success btn-sm">
                    <i class="fa fa-pencil"></i>
                    Ubah
                  </a>
                  <!-- jika tombol hapus ditekan maka akan mengirimkam id dari data yang dihapus ke file hapus.php -->
                  <a href="hapus.php?id=<?= $ebook['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin mau menghapus?')">
                    <i class="fa fa-trash"></i>
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
</body>
</html>