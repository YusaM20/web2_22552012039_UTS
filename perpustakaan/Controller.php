<?php
// Controller.php
class Controller {
    private $library;

    public function __construct() {
        $this->library = new Library();
    }

    public function addBook() {
        if (isset($_POST['judul']) && isset($_POST['pengarang']) && isset($_POST['tahun_terbit'])) {
            $judul = $_POST['judul'];
            $pengarang = $_POST['pengarang'];
            $tahun_terbit = $_POST['tahun_terbit'];
            $book = new Book($judul, $pengarang, $tahun_terbit);
            $this->library->addBook($book);
            header('Location: index.php');
            exit;
        }
    }

    public function printBooks() {
        echo "Daftar Buku:\n";
        foreach ($this->library->getBooks() as $book) {
            echo "- " . $book->getJudul() . " oleh " . $book->getPengarang() . " (" . $book->getTahunTerbit() . ")\n";
        }
    }
}