<?php
class Member {
    public $name;
    public $memberId;
    public $peminjaman;

    public function __construct($name, $memberId) {
        $this->name = $name;
        $this->memberId = $memberId;
        $this->peminjaman = "--";
    }

    public function memberInfo() {
        return "Nama: " . $this->name . "\n" .
               "Member ID: " . $this->memberId . "\n" .
               "Buku yang dipinjam: " . $this->peminjaman . "\n" . "\n";
    }

    public function pinjamBuku($book) {
        if ($book->status === "Tersedia") {
            $this->peminjaman = $book->judul;
            $book->status = "Dipinjam";
            return "Buku '" . $book->judul . "' berhasil dipinjam oleh " . $this->name . ".\n" . "\n";
        } else {
            return "Buku '" . $book->judul . "' tidak tersedia untuk dipinjam.\n" . "\n";
        }
    }
}