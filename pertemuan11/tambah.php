<?php
require 'functions.php';
// cek apakah tombol submit sudah ditekan atau belum
if(isset($_POST['submit'])) {
  // cek apakah data berhasil ditambahkan
  if(tambah($_POST) > 0) {
    echo "<script>
            alert('DATA BERHASIL DITAMBAHKAN');
            document.location.href = 'index.php';
          </script>
          ";
  } else {
    echo "<script>
            alert('DATA BERHASIL DITAMBAHKAN');
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

  <title>Tambah Data Ebook</title>
</head>
<body>
    <nav class="navbar bg-body-tertiary mb-2">
      <div class="container">
        <a class="navbar-brand fs-1" href="#"> Tambah Data Ebook </a>
      </div>
    </nav>


    <form action="" method="post">
        <div class="container mt-4">
          <div class="row mb-3">
            <label for="picture" class="col-sm-2 col-form-label">Gambar</label>
            <div class="col-sm-10">
              <input class="form-control" type="file" id="picture" name="picture">
            </div>
          </div>

          <div class="row mb-3">
            <label for="title" class="col-sm-2 col-form-label">Judul</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="title" placeholder="Ex: Hadits Arba'in Nawawi: Matan dan Terjemah" name="title"/>
            </div>
          </div>

          <div class="row mb-3">
            <label for="category" class="col-sm-2 col-form-label">Kategori</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="category" placeholder="Ex: Aqidah" name="category"/>
            </div>
          </div>

          <div class="row mb-3">
            <label for="authors" class="col-sm-2 col-form-label">Penulis</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="authors" placeholder="Ex: Abu Zakariya Yahya bin Syaraf an-Nawawi ad-Dimasqi" name="authors"/>
            </div>
          </div>

          <div class="row mb-3">
            <label for="published" class="col-sm-2 col-form-label">Diterbitkan oleh</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="published" placeholder="Ex: Pustaka Syabbab" name="published"/>
            </div>
          </div>

          <div class="row mb-3">
            <label for="year" class="col-sm-2 col-form-label">Tahun terbit</label>
            <div class="col-sm-10">
              <input type="number" class="form-control" id="year" placeholder="Ex: 2018" name="year"/>
            </div>
          </div>

          <div class="row mt-3">
            <div class="col text-center">
              <button type="submit" name="submit" class="btn btn-primary">
                <i class="fa fa-plus"></i>
                Tambah
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