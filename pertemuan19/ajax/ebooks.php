<?php 
require '../functions.php';

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

$keyword = $_GET['keyword'];
$query = "SELECT * FROM tb_ebooks WHERE
          title LIKE '%$keyword%' OR
          category LIKE '%$keyword%' OR
          authors LIKE '%$keyword%' OR
          published LIKE '%$keyword%' OR
          year LIKE '%$keyword%'
          ";
$ebooks = query($query);


?>

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
                <th>
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
                  <td class="text-center">
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