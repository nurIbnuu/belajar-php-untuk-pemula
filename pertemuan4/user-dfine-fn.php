<?php
// Belajar PHP untuk PEMULA | 6. FUNCTION

function salam($waktu, $nama = 'Admin') {
  return "Selamat $waktu, $nama";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Latihan Function</title>
</head>
<body>
  <h1><?= salam('Pagi'); ?></h1>
</body>
</html>