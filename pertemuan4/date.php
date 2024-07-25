<?php
// Belajar PHP untuk PEMULA | 6. FUNCTION

//      Built in Function

// Date/Time berhubungan dengan waktu; date(), time(), mktime(), strtotime(): 

//    Date => untuk menampilkan tanggal dengan format tertentu
// echo date('l'); # Wednesday
// echo date('d'); # 24
// echo date('m'); # 07
// echo date('M'); # Jul
// echo date('y'); # 24
// echo date('l, d-M-y') . "<br>"; # Wednesday, 24-Jul-24

//    Time
// echo time(); # UNIX Timestamp/EPOCH Time, detik yang sudah berlalu sejak 1 Januari 1970
// echo date("l") == echo("l", time())
// echo date('l', time() + 172800); # Friday (2 hari setelah hari ini)
// echo date('l', time() + 60 * 60 * 24 * 103); # Monday (103 hari setelah hari ini)
// echo date('l', time() - 60 * 60 * 24 * 104); # Thursday (104 hari sebelum hari ini)
// echo date('d M y', time() - 60 * 60 * 24 * 103); # Friday, 12 Apr 24 (103 hari sebelum hari ini)

//    mktime => membuat sendiri detik
// mktime(jam, menit, detik, bulan, tanggal, tahun)
// echo mktime(0,0,0,11,19,2005); # 1132354800 detik yang sudah berlalu sejak 19 November 2005
// echo date('l', mktime(0,0,0,11,19,2005)); # saya lahir hari Saturday


//    strtotime >< mktime
// strtotime yang dimasukkan adalah string
// echo strtotime('19 nov 2005'); # 1132354800
// echo date('l', strtotime('19 nov 2005')); # Saturday



// String: strlen() => menghitung panjang string; strcmp() => membandingkan string; explode() => memecah string menjadi array, htmlspecialchars() => menangani kode html


// Utility: var_dump() => mencetak isi variabel, array, object; isset() => mengecek apakah sebuah variabel sudah dibuat atau belum, menghasilkan boolean; empty() => apakah variabel kosong atau tidak; die() => memberhentikan program; sleep() => memberhentikan program sementara;
// $x = 1;
// var_dump(empty($x)); # boolean false
// $x = null;
// var_dump(empty($x)); # boolean true
