<?php 
/* File handling */
// <input type='file' ...> => input yang khusus menangani file
// atribut enctype di form => encoding type untuk menangani file, dua jalur; data string dikelola oleh $_POST, data file dikelola oleh $_FILES
// $_FILES => variabel superglobal khusus file
// function move_uploaded_file => memindahkan file yang diupload di komputer ke server

// gambar bisa dimasukkan ke database langsung dengan tipe data blob(binary large object= menyimpan file ke MySQL dalam bentuk biner, tidak dilakukan di seri ini karena 1. membuat ukuran database sangat besar, 2. membuat database berat, 3. file tempatnya di directory bukan di database, sehingga yang akan dilakukan 1. file diupload di directory, 2. sedangkan nama_file diupload di database)

// die => agar tidak menjalankan script setelahnya
?>