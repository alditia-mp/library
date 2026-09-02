<?php
require_once 'Book.php';

class DigitalBook extends Book {
    public $fileSize;
    public $format;

    public function __construct($judul, $penulis, $status, $fileSize, $format) {
        parent::__construct($judul, $penulis, $status);
        $this->fileSize = $fileSize;
        $this->format = $format;
    }

    public function bookInfo() {
        return parent::bookInfo() .
               "Format: " . $this->format . "\n" .
               "Ukuran File: " . $this->fileSize . " MB\n" . "\n" . "\n";
    }
}