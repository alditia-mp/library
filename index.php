<?php
require_once 'Book.php';
require_once 'Member.php';
require_once 'DigitalBook.php';

$buku1 = new Book("Apa itu Apel", "Albert Einstein", "Tersedia");
$buku2 = new Book("Windows vs Linux", "Elon Musk", "Tersedia");
$buku3 = new Book("The Eras Tour", "Taylor Swift", "Tersedia");
$ebook1 = new DigitalBook("Pendekar Nomor 1", "Kleo Juice", "Tersedia", 5, "PDF");
$ebook2 = new DigitalBook("Mengapa Langit Biru", "Rasmus Rismus", "Tersedia", 5, "PDF");

$member1 = new Member("Alditia M. Pirmansyah", "2410631250081");
$member2 = new Member("Nurfadil Irfan", "2410631250082");

echo "=== Informasi Buku ===\n";
echo $buku1->bookInfo();
echo $buku2->bookInfo();
echo $buku3->bookInfo();
echo $ebook1->bookInfo();

echo "=== Informasi Anggota ===\n";
echo $member1->memberInfo();
echo $member2->memberInfo();

echo "\n=== Proses Peminjaman Buku ===\n";
echo $member1->pinjamBuku($buku1);

echo "=== Informasi Buku Setelah Peminjaman ===\n";
echo $buku1->bookInfo();
echo $buku2->bookInfo();
echo $buku3->bookInfo();
echo $ebook1->bookInfo();

echo "=== Informasi Anggota Setelah Peminjaman ===\n";
echo $member1->memberInfo();
echo $member2->memberInfo();