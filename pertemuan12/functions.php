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
  $gambar = htmlspecialchars($data['picture']); // $data['picture'] == $_POST['picture'] dan seterusnya
  $judul = htmlspecialchars($data['title']);
  $kategori = htmlspecialchars($data['category']);
  $penulis = htmlspecialchars($data['authors']);
  $diterbitkan = htmlspecialchars($data['published']);
  $tahun = htmlspecialchars($data['year']);

  // query insert data/perintah yang akan di jalankan di MySQL
  global $conn;
  // data yang baru saja dimasukkan user disimpan di variabel $query
  $query = "INSERT INTO tb_ebooks VALUES
  ('', '$gambar', '$judul', '$kategori', '$penulis', '$diterbitkan', '$tahun')";
  mysqli_query($conn, $query); // conn, agar koneksi ke databasi

  return mysqli_affected_rows($conn); // berisi berapa baris yang terpengaruh/berubah di database
}






function hapus($id) {
  global $conn;
  mysqli_query($conn, "DELETE FROM tb_ebooks WHERE id = $id"); // id == nama kolom ditabel database
  return mysqli_affected_rows($conn); // berisi berapa baris yang terpengaruh/berubah di database
}





function ubah($data) { // $data == $_POST
    // ambil data baru dari tiap element dalam form
    $id = $data['id']; // tidak perlu htmlspecialchars karena id tidak diinputkan user
    $gambar = htmlspecialchars($data['picture']);
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