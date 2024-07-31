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





function tambah($data) {
  // ambil data dari tiap element dalam form
  $gambar = htmlspecialchars($data['picture']);
  $judul = htmlspecialchars($data['title']);
  $kategori = htmlspecialchars($data['category']);
  $penulis = htmlspecialchars($data['authors']);
  $diterbitkan = htmlspecialchars($data['published']);
  $tahun = htmlspecialchars($data['year']);

  // query insert data
  global $conn;
  $query = "INSERT INTO tb_ebooks VALUES
  ('', '$gambar', '$judul', '$kategori', '$penulis', '$diterbitkan', '$tahun')";
  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}






function hapus($id) {
  global $conn;
  mysqli_query($conn, "DELETE FROM tb_ebooks WHERE id = $id");

  return mysqli_affected_rows($conn);
}





function ubah($data) {
    // ambil data dari tiap element dalam form
    $id = $data['id'];
    $gambar = htmlspecialchars($data['picture']);
    $judul = htmlspecialchars($data['title']);
    $kategori = htmlspecialchars($data['category']);
    $penulis = htmlspecialchars($data['authors']);
    $diterbitkan = htmlspecialchars($data['published']);
    $tahun = htmlspecialchars($data['year']);
  
    // query insert data
    global $conn;
    $query = "UPDATE tb_ebooks SET
                picture = '$gambar',
                title = '$judul',
                category = '$kategori',
                authors = '$penulis',
                published = '$diterbitkan',
                year = '$tahun'
              WHERE id = $id
            ";
    mysqli_query($conn, $query);
  
    return mysqli_affected_rows($conn);
}