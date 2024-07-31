<?php
require 'functions.php';


// ambil data di URL
$id = $_GET['id'];

// query data ebook berdasarkan id
$ebook = query("SELECT * FROM tb_ebooks WHERE id = $id")[0];

// cek apakah tombol submit sudah ditekan atau belum
if(isset($_POST['submit'])) {
  // cek apakah data berhasil diubah
  if(ubah($_POST) > 0) {
    echo "<script>
            alert('DATA BERHASIL DIUBAH');
            document.location.href = 'index.php';
          </script>
          ";
  } else {
    echo "<script>
            alert('DATA BERHASIL DIUBAH');
            document.location.href = 'index.php';
          </script>
          ";
  }
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

  <title>Ubah Data Ebook</title>
</head>
<body>
    <nav class="navbar bg-body-tertiary mb-2">
      <div class="container">
        <a class="navbar-brand fs-1" href="#"> Ubah Data Ebook </a>
      </div>
    </nav>


    <form action="" method="post">
      <input type="hidden" name="id" value="<?= $ebook['id']; ?>">

        <div class="container mt-4">
          <div class="row mb-3">
            <label for="picture" class="col-sm-2 col-form-label">Gambar</label>
            <div class="col-sm-10">
              <input class="form-control" type="file" id="picture" name="picture" value="<?= $ebook['picture']; ?>">
            </div>
          </div>

          <div class="row mb-3">
            <label for="title" class="col-sm-2 col-form-label">Judul</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="title" placeholder="Ex: Hadits Arba'in Nawawi: Matan dan Terjemah" name="title" value="<?= $ebook['title']; ?>"/>
            </div>
          </div>

          <div class="row mb-3">
            <label for="category" class="col-sm-2 col-form-label">Kategori</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="category" placeholder="Ex: Aqidah" name="category" value="<?= $ebook['category']; ?>"/>
            </div>
          </div>

          <div class="row mb-3">
            <label for="authors" class="col-sm-2 col-form-label">Penulis</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="authors" placeholder="Ex: Abu Zakariya Yahya bin Syaraf an-Nawawi ad-Dimasqi" name="authors" value="<?= $ebook['authors']; ?>"/>
            </div>
          </div>

          <div class="row mb-3">
            <label for="published" class="col-sm-2 col-form-label">Diterbitkan oleh</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="published" placeholder="Ex: Pustaka Syabbab" name="published" value="<?= $ebook['published']; ?>"/>
            </div>
          </div>

          <div class="row mb-3">
            <label for="year" class="col-sm-2 col-form-label">Tahun terbit</label>
            <div class="col-sm-10">
              <input type="number" class="form-control" id="year" placeholder="Ex: 2018" name="year"  value="<?= $ebook['year']; ?>"/>
            </div>
          </div>

          <div class="row mt-3">
            <div class="col text-center">
              <button type="submit" name="submit" class="btn btn-success">
                <i class="fa fa-pencil"></i>
                Ubah
              </button>
            
              <a href="index.php" type="button" class="btn btn-danger">
                <i class="fa fa-times" aria-hidden="true"></i>
                Batal
              </a>
            </div>
          </div>
      </div>
    </form>
</body>
</html>