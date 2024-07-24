<?php
//      Struktur Kendali
//   Perulangan; for while do..while foreach:perulangan khusus array
// memulai Inisialisasi nilai awal perulangan dengan nilai 0 agar terbisa jika bekerja dengan array

  // for ($i = 0; $i < 3; $i++) {
  //   echo 'Hello World <br>';
  // }

  // $i = 0;
  // while($i < 3) {
  //   echo 'Hello World <br>';
  //   $i++;
  // }

  // $i = 10;
  // do {
  //   echo 'Hello World <br>';
  //   $i++;
  // } while ($i < 3);

  //                      Latihan 1
      /*
      <!DOCTYPE html>
      <html lang="en">
      <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Membuat Tabel dengan Perulangan</title>
      </head>
      <body>
        <table border='1' cellpadding='10' cellspacing='0'>
          <?php 
            for ($i = 1; $i <= 3; $i++) {
              echo '<tr>';
                for ($j = 1; $j <= 5; $j++) {
                  echo "<td>$i, $j</td>";
                }
              echo '</tr>';
            }
          ?>
        </table>
      </body>
      </html>
      */
      
      /*
      Metode Templating
      <!DOCTYPE html>
      <html lang="en">
      <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Membuat Tabel dengan Perulangan</title>
      </head>
      <body>
        <table border='1' cellpadding='10' cellspacing='0'>
          <?php for ($i = 1; $i <= 3; $i++) { ?>
            <tr>
              <?php for ($j = 1; $j <= 5; $j++) { ?>
                <td><?php echo "$i, $j"?></td>
              <?php } ?>
            </tr>
          <?php } ?>
        </table>
      </body>
      </html>
          ATAU
      <!DOCTYPE html>
      <html lang="en">
      <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Membuat Tabel dengan Perulangan</title>
      </head>
      <body>
        <table border='1' cellpadding='10' cellspacing='0'>
          <?php for ($i = 1; $i <= 3; $i++) : ?>
            <tr>
              <?php for ($j = 1; $j <= 5; $j++) : ?>
                <td><?php echo "$i, $j"?></td>
              <?php endfor; ?>
            </tr>
          <?php endfor; ?>
        </table>
      </body>
      </html>
          ATAU  
      <!DOCTYPE html>
      <html lang="en">
      <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Membuat Tabel dengan Perulangan</title>
      </head>
      <body>
        <table border='1' cellpadding='10' cellspacing='0'>
          <?php for ($i = 1; $i <= 3; $i++) : ?>
            <tr>
              <?php for ($j = 1; $j <= 5; $j++) : ?>
                <td><?= "$i, $j"?></td> CARA MENYINGKAT JIKA INGIN MENAMPILKAN ISI DARI VARIABEL ATAU STRING ATAU DLL MAKA <?php echo bisa diganti jadi <?=
              <?php endfor; ?>
            </tr>
          <?php endfor; ?>
        </table>
      </body>
      </html>
      */
      
      /*
                KOMBINASI PERULANGAN DAN PENGKONDOSIAN
      <!DOCTYPE html>
      <html lang="en">
      <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Membuat Tabel dengan Perulangan</title>
        <style>
          .baris {
            background-color: lightgrey;
          }
          .baris-ke3 {
            background-color: grey;
          }
        </style>
      </head>
      <body>
        <table border='1' cellpadding='10' cellspacing='0'>
          <?php for ($i = 1; $i <= 5; $i++) : ?>
            <?php if ($i % 2 == 0) : ?> ':' sama dengan '{}'
              <tr class=baris>
            <?php elseif ($i == 3) :?>
              <tr class=baris-ke3>
            <?php else :?>
              <tr>
            <?php endif; ?>
              <?php for ($j = 1; $j <= 5; $j++) : ?>
                <td><?= "$i, $j"?></td>
              <?php endfor; ?>
            </tr>
          <?php endfor; ?>
        </table>
      </body>
      </html>
      */

//      Pengkondisian?Percabangan; if if...else if...elseif...else ternary switch

    // $x = 10;

    // if ($x < 20) {
    //   echo 'Benar';
    // }

    // if ($x < 1) {
    //   echo 'Benar';
    // } else {
    //   echo 'Salah';
    // }

    // if ($x < 1) {
    //   echo 'Benar';
    // } elseif ($x == 10) {
    //   echo 'Bingo!';
    // } else {
    //   echo 'Salah';
    // }

?>

      <!DOCTYPE html>
      <html lang="en">
      <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Membuat Tabel dengan Perulangan</title>
        <style>
          h1 {
            text-align: center;
            margin-top: 100px;
          }
          table {
            margin:auto;
          }
          .baris {
            background-color: lightgrey;
          }
          .baris-ke3 {
            background-color: grey;
          }
        </style>
      </head>
      <body>
        <h1>MEMBUAT TABEL DENGAN<br>PERULANGAN DAN PENGKONDISISAN<br>DI PHP</h1>
        <table border='1' cellpadding='10' cellspacing='0'>
          <?php for ($i = 1; $i <= 5; $i++) : ?>
            <?php if ($i % 2 == 0) : ?>
              <tr class=baris>
            <?php elseif ($i == 3) :?>
              <tr class=baris-ke3>
            <?php else :?>
              <tr>
            <?php endif; ?>
              <?php for ($j = 1; $j <= 5; $j++) : ?>
                <td><?= "$i, $j"?></td>
              <?php endfor; ?>
            </tr>
          <?php endfor; ?>
        </table>
      </body>
      </html>
