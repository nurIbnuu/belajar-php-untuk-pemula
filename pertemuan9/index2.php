<?php 
//    koneksi ke database
$conn = mysqli_connect('localhost', 'root', '', 'phpdasar');
# mysqli_connect(nama_host, username, password, nama_database);


//    ambil data dari tabel tb_ebooks/query data ebooks
$result = mysqli_query($conn, 'SELECT * FROM tb_ebooks');
# mysqli_query(mysqli_connect, perintah_SQL/suery);
// jika query berhasil, maka petintah_SQL/query dilakukan dan mengmbalikan true
// data belum tampil ibarat lemari bukan isi lemarinya


//    ambil data (fetch) tb_ebooks dari object result

// mysqli_fetch_row(); mengembalikan array numeric
// mysqli_fetch_assoc(); mengembalikan array associative
// mysqli_fetch_array(); mengembalikan array numeric dan array associative (data yang disajikan double)
// mysqli_fetch_object(); mengembalikan object

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
    <nav class="navbar bg-body-tertiary">
      <div class="container">
        <a class="navbar-brand fs-1" href="#"> Daftar Ebook Sunnah </a>
      </div>
    </nav>

    <div class="container mt-2">

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
          <a href="kelola.php" type="button" class="btn btn-primary">
            <i class="fa fa-plus"></i>
            Tambah Data
          </a>
        </div>
      </div>


      <div class="table-responsive">
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
            <?php while($row = mysqli_fetch_assoc($result)) : ?> 
            <!-- cara diatas kurang efektif ibarat yang dibawa adalah lemari bukan wadah baju -->
            <tr>
              <td>
                <center><?= $i; ?></center>
              </td>
              <td>
                <img src="image/ebooks-sunnah/<?= $row['picture']; ?>">
              </td>
              <td><?= $row['title']; ?></td>
              <td><?= $row['category']; ?></td>
              <td><?= $row['authors']; ?></td>
              <td><?= $row['published']; ?></td>
              <td><?= $row['year']; ?></td>
              <td class="text-center">
                <a href="kelola.php?ubah=1" type="button" class="btn btn-success btn-sm">
                  <i class="fa fa-pencil"></i>
                </a>

                <a href="proses.php?hapus=1" class="btn btn-danger btn-sm">
                  <i class="fa fa-trash"></i>
                </a>
              </td>
            </tr>
            <?php $i++; ?>
            <?php endwhile; ?>
          </tbody>
        </table>
      </div>
      
    </div>
</body>
</html>