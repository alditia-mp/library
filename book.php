<?php
class Book {
    public $judul;
    public $penulis;
    public $status;

    public function __construct($judul, $penulis, $status) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->status = $status;
    }

    public function bookInfo() {
        return "Judul: " . $this->judul . "\n" .
               "Penulis: " . $this->penulis . "\n" .
               "Status: " . $this->status . "\n" . "\n";
    }
}