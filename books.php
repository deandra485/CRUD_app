<?php 
// Contoh penambahan data buku
$title = 'Contoh Buku';
$author = 'Penulis';
$year = '2024';

// Membaca data buku yang sudah ada
$file = 'books.txt';
$books = file_exists($file) ? unserialize(file_get_contents($file)) : [];

// Menambahkan buku baru
$books[] = ['title' => $title, 'author' => $author, 'year' => $year];

// Menyimpan kembali data ke file
file_put_contents($file, serialize($books));
?>