<?php
session_start();

if(!isset($_SESSION['login'])) {
  header('Location: login.php');
  exit;
}


require 'functions.php';
// cek apakah tombol submit sudah ditekan atau belum
if(isset($_POST['submit'])) {
  // debug
  // var_dump($_POST); SETELAH INPUT TYPE DIUBAH JADI FILE DAN FORM DIBERI ATTRIBUTE ENCTYPE
  /*   D:\xampp\htdocs\php\php-wpu\Belajar_PHP_untuk_Pemula2\pertemuan13\tambah.php:6:
array (size=6)
    tidak ada key 'picture' karena sudah di simpan ke $_FILES
  // 'picture' = 'image.jpg' (sebelmu diberi attribut enctype maka key picture tampil ketika mencetak $_POST, tapi setelah form diberi atribut enctype key picture tidak tampil di $_POST tapi di $_FILES)
  'title' => string 'ss' (length=2)
  'category' => string 'ss' (length=2)
  'authors' => string 'ss' (length=2)
  'published' => string 'ss' (length=2)
  'year' => string '1' (length=1)
  'submit' => string '' (length=0) */
  // var_dump($_FILES);
  /* D:\xampp\htdocs\php\php-wpu\Belajar_PHP_untuk_Pemula2\pertemuan13\tambah.php:7:
array (size=1), 
    array multi dimensi yang di dalam array associative ada array associative
  'picture' => 
    array (size=6)
      'name' => string 'dl19.jpg' (length=8), nama file
      'full_path' => string 'dl19.jpg' (length=8)
      'type' => string 'image/jpeg' (length=10), typenya image
      'tmp_name' => string 'D:\xampp\tmp\php2AAD.tmp' (length=24), tempat penyimpanan sementara
      'error' => int 0, 0 tidak ada error, 4 tidak ada file yang diupload
      'size' => int 120785, ukuran file dalam satuan byte
      */
  // die;

  // cek apakah data berhasil ditambahkan
  if(tambah($_POST) > 0) { // menjalankan function tambah(), $_POST == $data di function tambah()
    // jika baris yang terpengaruh/berubah lebih dari 0 maka menjalankan ini
    echo "<script>
            alert('DATA BERHASIL DITAMBAHKAN');
            document.location.href = 'index.php';
          </script>
          "; // setelah muncul alert lalu ditekan OK maka akan redirect ke index.php
  } else {
    echo "<script>
            alert('DATA GAGAL DITAMBAHKAN');
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


    <form action="" method="post" enctype="multipart/form-data">
      <!-- supaya form bisa mengelola from maka harus ada attribut enctype, data string dikelola $_POST, data file dikelola $_FILES -->
        <div class="container mt-4">
          <div class="row mb-3">
            <label for="picture" class="col-sm-2 col-form-label">Gambar</label>
            <div class="col-sm-10">
              <input class="form-control" type="file" id="picture" name="picture">
              <!-- input type file akan mengirimkan nama filenya saja, belum bisa mengelola filenya -->
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