<?php
/* GET bisa melalui Form atau URL, POST hanya bisa melalui Form.
Form biasa digunakan untuk fitur Login, Karena password tidak kelihatan. 
GET ada di URL, POST tidak ada di URL */
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>POST</title>
</head>
<body>
  <?php if(isset($_POST['submit'])) : ?> <!-- jika tombil submit dipencet -->
    <h1>Judul = <?= $_POST['Title']; ?></h1>
  <?php endif; ?>



  <!-- cara baca kode di bawah, form ini menggunakan metode request POST dan semua data di dalam form dikirim ke latihan4.php-->
  <!-- jika action kosong maka data dikirim ke halaman sendiri, jika method kosong maka akan menggunakan metode request GET  -->
  <form action="" method="post">
    <label for="Title">Judul : </label>
    <input type="text" name="Title" id="Title">
    <button type="submit" name="submit">Kirim</button>
  </form>
</body>
</html>