<?php
// Belajar PHP untuk PEMULA | 8. ASSOCIATIVE ARRAY

$ebooks = [
  [
    'Picture' => 'arbain-annawawi.jpg',
    'Title' => "Hadits Arba'in Nawawi: Matan dan Terjemah",
    'Category' => 'Aqidah',
    'Authors' => 'Abu Zakariya Yahya bin Syaraf an-Nawawi ad-Dimasqi',
    'Published By' => 'Pustaka Syabab',
    'In Year' => 2018,
  ],
  [
    'Picture' => 'terjemah-tafsir-assadiy.jpg',
    'Title' => "Terjemah Tafsir As Sa’diy (Al Fatihah dan Juz ‘Amma)",
    'Category' => 'Al-Quran Al-Karim',
    'Authors' => "Abdurrahman bin Nashir As-Sa'di, dr. Raehanul Bahraen, M.Sc., Sp.PK.",
    'Published By' => 'Indonesia Bertauhid',
    'In Year' => 2021,
  ],
  [
    'Picture' => 'awas-fenomena-syirik.jpg',
    'Title' => 'Awas Fenomena Syirik di Sekitar Kita',
    'Category' => 'Aqidah',
    'Authors' => 'Abu Ubaidah Yusuf bin Mukhtar as-Sidawi',
    'Published By' => 'Yusuf Abu Ubaidah',
    'In Year' => 2024,
  ],
  [
    'Picture' => 'satu-surat-satu-faidah.jpg',
    'Title' => 'Satu Surat Satu Faidah',
    'Category' => 'Al-Quran Al-Karim',
    'Authors' => 'Abu Ubaidah Yusuf bin Mukhtar as-Sidawi',
    'Published By' => 'Yusuf Abu Ubaidah',
    'In Year' => 2024,
  ],
  [
    'Picture' => '10-adab-sehari-hari.jpg',
    'Title' => '10 Adab Sehari-hari',
    'Category' => 'Adab',
    'Authors' => "Shalih bin Abdillah al-'Ushaimiy",
    'Published By' => 'Yusuf Abu Ubaidah',
    'In Year' => 2024,
  ],
]
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercise</title>
</head>
<body>
  <h1>E-Books Sunnah</h1>
  <?php foreach($ebooks as $ebook) : ?>
    <ul>
      <li>
        <img src='image/ebooks-sunnah/<?= $ebook['Picture']; ?>'>
      </li>
      <li>Judul : <?= $ebook['Title']; ?></li>
      <li>Kategori : <?= $ebook['Category']; ?></li>
      <li>Penulis : <?= $ebook['Authors']; ?></li>
      <li>Diterbitkan oleh : <?= $ebook['Published By']; ?></li>
      <li>Tahun terbit : <?= $ebook['In Year']; ?></li>
    </ul>
  <?php endforeach; ?>
</body>
</html>