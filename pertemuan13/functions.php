<?php 
//    koneksi ke database
$conn = mysqli_connect('localhost', 'root', '', 'phpdasar');





function query($query) {
  global $conn;
  $result = mysqli_query($conn, $query);
  $rows = []; # ini wadah baju
  while($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}





function tambah($data) { // $data == $_POST
  // ambil data dari tiap element dalam form
  // data yang disimpan variabel agar tidak error karena tanda petik '/" 


  // upload gambar dulu
  // gambar diupload ke directory, nama gambar diinsert ke database
  $gambar = upload(); // $gambar diisi nama gambar, hasil dari function upload(), function upload jika berhasil akan 1. mengupload gambar, 2. menyimpan nama gambar di $gambar. Jika function upload() gagal tidak akan mengupload dan mengirimkan nama gambar
  if(!$gambar) { // !$gambar sama dengan $gambar === false / gagal
    return false; // jika gagal insert/script dibawahnya tidak dijalankan
  }

  $judul = htmlspecialchars($data['title']);
  $kategori = htmlspecialchars($data['category']);
  $penulis = htmlspecialchars($data['authors']);
  $diterbitkan = htmlspecialchars($data['published']);
  $tahun = htmlspecialchars($data['year']); // $data['year'] == $_POST['picture'] dan seterusnya

  // query insert data/perintah yang akan di jalankan di MySQL
  global $conn;
  // data yang baru saja dimasukkan user disimpan di variabel $query
  $query = "INSERT INTO tb_ebooks VALUES
  ('', '$gambar', '$judul', '$kategori', '$penulis', '$diterbitkan', '$tahun')";
  mysqli_query($conn, $query); // conn, agar koneksi ke databasi

  return mysqli_affected_rows($conn); // berisi berapa baris yang terpengaruh/berubah di database
}




// upload gambar
function upload() {
  // mengambil isi $_FILES
  $namaFile = $_FILES['picture']['name']; // nama file beserta ekstensinya
  $ukuranFile = $_FILES['picture']['size'];
  $error = $_FILES['picture']['error'];
  $tmpName = $_FILES['picture']['tmp_name']; // pemyimpanan sementara



  // cek apakah tidak ada gambar yang diupload/WAJIB UPLOAD GAMBAR
  if(!$error === 4) { // error === 4 artinya tidak ada gambar yang diupload
    echo "
          <script>
            alert('Pilih gambar terlebih dahulu!');
          </script>
        ";
        return false;
  }



  // cek yang boleh diupload hanya gambar(ekstensi file gambar adalah  jpg/jpeg/png)
  // function explode memcah string menjadi array, contoh nur.jpg = ['nur', 'jpg'], in_array mengcek apakah ada string yang di cari di sebuah array/mencari jarum di jerami(true jika yang dicari ketemu).
  $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
  $ekstensiGambar = explode('.', $namaFile); // pecah nama file
  $ekstensiGambar = strtolower(end($ekstensiGambar)); // pecah nama file, ambil karakter terakhir, lalu ubah menjadi huruf kecil
  if(!in_array($ekstensiGambar, $ekstensiGambarValid)) { // jika ekstensi tidak ada
    echo "
      <script>
        alert('Yang diupload bukan gambar!');
      </script>
    ";
    return false;
  }



  // cek jika ukurannya terlalu besar
  // 1000000 = 1MB
  if($ukuranFile > 1000000) {
    echo "
    <script>
      alert('Ukuran gambar terlalu besar!');
    </script>
  ";
  return false;
  }



  // lolos pengecekan gambar, siap diupload
  $namaFileBaru = uniqid() . '.' . "$ekstensiGambar"; // generate nama gambar baru, karena ada kemungkinan user yang berbeda memiliki nama gambar yang sama, jika nama file sama maka gambar lain yang namanya sama juga ikut berubah/ditimpa, misal nama gambarnya 66a9a1c8d0bde.jpg(ini yang masuk ke database/server)

  /*   function move_uploaded_file(string $from/asaf, string $to/tujuan): bool { }
  @param string $from — The filename of the uploaded file.
  @param string $to — The destination of the moved file. */
  move_uploaded_file($tmpName, 'image/ebooks-sunnah/' . $namaFileBaru); // ini ke directory
  return $namaFileBaru; // ini ke database
  // jika gambar berhasil diupload maka isi $gambar adalah nama file untuk diinsert ke data base/server(lalu $gambar disimpan ke $query)
}







function hapus($id) {
  global $conn;
  mysqli_query($conn, "DELETE FROM tb_ebooks WHERE id = $id"); // id == nama kolom ditabel database
  return mysqli_affected_rows($conn); // berisi berapa baris yang terpengaruh/berubah di database
}





function ubah($data) { // $data == $_POST
    // ambil data baru dari tiap element dalam form
    $id = $data['id']; // tidak perlu htmlspecialchars karena id tidak diinputkan user

    $gambarLama = $data['gambarLama']; // ambil gambarLama

    // cek apakah user memilih gambar baru atau tidak
    if($_FILES['picture']['error'] === 4) { // apakah gambar kosong/tidak upload gambar baru, misal dia hanya mengganti data judul, 
      $gambar = $gambarLama;
    } else {
      $gambar = upload(); // jika ada gambar baru / error === 0, maka menjalalankan function upload()
    }

    $judul = htmlspecialchars($data['title']);
    $kategori = htmlspecialchars($data['category']);
    $penulis = htmlspecialchars($data['authors']);
    $diterbitkan = htmlspecialchars($data['published']);
    $tahun = htmlspecialchars($data['year']);
  
    // query insert data
    global $conn;
    $query = "UPDATE tb_ebooks SET
                picture = '$gambar', -- picture = data lama/sebelum diubah, ditimpa $gambar = data baru/setelah diubah, dan seterusnya
                title = '$judul',
                category = '$kategori',
                authors = '$penulis',
                published = '$diterbitkan',
                year = '$tahun'
              WHERE id = $id -- id nama kolom di tabel tb_ebooks
            ";
    mysqli_query($conn, $query);
  
    return mysqli_affected_rows($conn);
}





function cari($keyword) {
  $query = "SELECT * FROM tb_ebooks WHERE
              title LIKE '%$keyword%' OR
              category LIKE '%$keyword%' OR
              authors LIKE '%$keyword%' OR
              published LIKE '%$keyword%' OR
              year LIKE '%$keyword%'
            ";
  return query($query);
}