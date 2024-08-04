<?php 
# Login system
/* Registrasi/sign up */
// tabel 'user' di database untuk menampung data user seperti username, email, password
// enkripsi password, khusus password, si pembuat website tidak boleh tau apa password user

// Login
/* Session */
// Mekasisme penyimpanan informasi ke dalam variabel agar bisa digunakan di lebih dari satu halaman. Informasi disimpan di server. $_SESSION, harus menjalankan session_start() di setiap file. Nilainya akan hilang dalam 1 sesi(restart komputer, close browser)


/* Cookie */
// informasi disimpan di browser/client, user bisa memanipulasi cookie, fungsi cookie; mengenali user, shopping cart, personalisasi. 'Remember me' agar user tidak perlu berulang kali login. Kenyamanan berbanding terbalik dengan Keamanan.
// $_COOKIE
// membuat cookie: setcookie(key, value, waktu_expired_cookie)
// contoh: setcookie('nama', 'nuribnuu', time()+60);
// berlaku 1 sesi seperti session




// Web Hosting
// Google Sites, GitHub Pages, Firebase, ...
// 000webhost.com, infinityfree.net, ... (gratis)

// CMS
// Wordpress, Blogger, Wix, ...

// Web Hosting = tempat penyimpanan WEB, + Nama Domain

// Nama Domain
// freenom.com, dot.tk, name.com, ..(gratis)

// jangan pakai .tk


// Web Hosting Berbayar jumlahnya sangat banyak

?>