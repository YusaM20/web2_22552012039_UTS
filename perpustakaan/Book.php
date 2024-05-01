<?php

class Book {
    private $judul;
    private $pengarang;
    private $tahun_terbit;
    private $status_buku;

    public function __construct($judul, $pengarang, $tahun_terbit) {
        $this->judul = $judul;
        $this->pengarang = $pengarang;
        $this->tahun_terbit = $tahun_terbit;
        $this->status_buku = false;
    }

    public function getJudul() {
        return $this->judul;
    }

    public function getPengarang() {
        return $this->pengarang;
    }

    public function getTahunTerbit() {
        return $this->tahun_terbit;
    }

    public function getStatusBuku() {
        return $this->status_buku;
    }

    public function setJudul($judul) {
        $this->judul = $judul;
    }

    public function setPengarang($pengarang) {
        $this->pengarang = $pengarang;
    }

    public function setTahunTerbit($tahun_terbit) {
        $this->tahun_terbit = $tahun_terbit;
    }

    public function setStatusBuku($status_buku) {
        $this->status_buku = $status_buku;
    }
}