<?php
// Belajar PHP untuk PEMULA | 4. SINTAKS PHP


  //    echo untuk mencetak ke layar jika dilihat oleh user, sedangkan var_dump digunakan untuk mencetak ke layar tapi untuk programmer karena yang dicetak lebih lengkap isinya.
  // echo "Hello World";

  //      VARIABEL DAN KONSTANTA.
  //    menyimpan nilai di memori dengan variabel dan konstanta.
  //    variabel diawali dengan tanda dollar $.
  // $myName = "nurIbnuu";
  // echo $myName;
  //    konstanta bisa dengan perintah define atau const.
  // define("MY_NAME", "nurIbnuuu");
  // echo MY_NAME;
  // const MY_NAME = "nurIbnuu==";
  // echo MY_NAME;

  //      TIPE DATA.
  // $coba = null;
  // var_dump ($coba); ini null.
  //    jika kita belum tahu isi dari suatu variabel maka lebih baik isi dulu dengan tipe data null.
  // var_dump(false); ini boolean.
  // var_dump(PHP_INT_MAX); ini integer.
  // var_dump(2_000_000_000); ini integer.
  // var_dump(0b10); ini integer (biner).
  // var_dump(010); ini integer (oktal).
  // var_dump(0x10); ini integer (hexadesimal).
  // var_dump(-1.5); ini float.
  //    jika nilainya eksponen misal 123e5 maka dinilai float, meski ketika dicetak nilainya integer(12300000).
  // var_dump(123e5);
  // var_dump(-123e5); ini float.
  // var_dump(1_000_000_000.5); ini float.
  //    tipe data string lebih pakai petik 2 jika kita butuh menggunakan escape character dan variable passing, jika tidak maka pakai petik 1 saja agar script lebih cepat.
  // $myName = "nur\nIbnuu"; \n(menambah enter) merupakan escape character.
  // var_dump($myName);
  // $name1 = "nur";
  // $name2 = "$name1 Ibnuu"; ini variable passing.
  // var_dump($name2);
  //    string menggunakan heredoc(perilakunya sama dengan petik 2) dan nowdoc(perilakunya sama dengan petik 1) jika lebih dari banyak baris.
  // $html = <<<END     ini heredoc.
  // $html = <<<'END'   ini nowdoc
  // <!DOCTYPE html>
  // <html lang="en">
  // <head>
  //   <meta charset="UTF-8">
  //   <meta name="viewport" content="width=device-width, initial-scale=1.0">
  //   <title>Document\n$name1</title>
  // </head>
  // <body>
  //   <h1></h1>
  // </body>
  // </html>
  // END;
  // var_dump($html);

  //    Operator Aritmatika (kali*), (sisa bagi/modulus%), (pangkat**)
  var_dump(1+2*3);

?>