<?php
session_start();

if(!isset($_SESSION['login'])) {
  header('Location: login.php');
  exit;
}


require 'functions.php';

$id = $_GET['id']; // penulisan 'id' sama dengan nama variabel yang dikirimkan ketika tombol hapus ditekan
// id data disimpan ke $id

if(hapus($id) > 0) {
  // jika baris yang terpengaruh/berubah lebih dari 0 maka menjalankan ini
  echo "
  <script>
    alert('DATA BERHASIL DIHAPUS');
    document.location.href = 'index.php';
  </script>
"; // setelah muncul alert lalu ditekan OK maka akan redirect ke index.php
} else {
  echo "
  <script>
    alert('DATA GAGAL DIHAPUS');
    document.location.href = 'index.php';
  </script>
";
}
?>