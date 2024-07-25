<?php
// Belajar PHP untuk PEMULA | 9. GET & POST

$ebooks = [
  [
    'Picture' => 'arbain-annawawi.jpg',
    'Title' => "Hadits Arba'in Nawawi: Matan dan Terjemah",
    'Category' => 'Aqidah',
    'Authors' => 'Abu Zakariya Yahya bin Syaraf an-Nawawi ad-Dimasqi',
    'Published' => 'Pustaka Syabab',
    'Year' => 2018,
  ],
  [
    'Picture' => 'terjemah-tafsir-assadiy.jpg',
    'Title' => "Terjemah Tafsir As Sa’diy (Al Fatihah dan Juz ‘Amma)",
    'Category' => 'Al-Quran Al-Karim',
    'Authors' => "Abdurrahman bin Nashir As-Sa'di, dr. Raehanul Bahraen, M.Sc., Sp.PK.",
    'Published' => 'Indonesia Bertauhid',
    'Year' => 2021,
  ],
  [
    'Picture' => 'awas-fenomena-syirik.jpg',
    'Title' => 'Awas Fenomena Syirik di Sekitar Kita',
    'Category' => 'Aqidah',
    'Authors' => 'Abu Ubaidah Yusuf bin Mukhtar as-Sidawi',
    'Published' => 'Yusuf Abu Ubaidah',
    'Year' => 2024,
  ],
  [
    'Picture' => 'satu-surat-satu-faidah.jpg',
    'Title' => 'Satu Surat Satu Faidah',
    'Category' => 'Al-Quran Al-Karim',
    'Authors' => 'Abu Ubaidah Yusuf bin Mukhtar as-Sidawi',
    'Published' => 'Yusuf Abu Ubaidah',
    'Year' => 2024,
  ],
  [
    'Picture' => '10-adab-sehari-hari.jpg',
    'Title' => '10 Adab Sehari-hari',
    'Category' => 'Adab',
    'Authors' => "Shalih bin Abdillah al-'Ushaimiy",
    'Published' => 'Yusuf Abu Ubaidah',
    'Year' => 2024,
  ],
]
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Ebook Sunnah</title>
</head>
<body>
  <h1>Ebooks Sunnah</h1>
  <ul>
    <?php foreach($ebooks as $ebook) : ?>
      <li>
        <a href="latihan2.php?Picture=<?= $ebook['Picture']; ?>&Title=<?= $ebook['Title']; ?>&Category=<?= $ebook['Category']; ?>&Authors=<?= $ebook['Authors']; ?>&Published=<?= $ebook['Published']; ?>&Year=<?= $ebook['Year']; ?>">

          <img src="image/ebooks-sunnah/<?= $ebook['Picture']; ?>">
          
        </a>
      </li>
    <?php endforeach; ?>
  </ul>
</body>
</html>