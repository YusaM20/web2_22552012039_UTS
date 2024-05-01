// index.php
<?php
require_once 'Controller.php';

$controller = new Controller();

if (isset($_POST['action']) && $_POST['action'] === 'addBook') {
    $controller->addBook();
} else {
    $controller->printBooks();
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Sistem Perpustakaan</title>
    <style>
    body {
        font-family: Arial, sans-serif;
    }

    .book-list {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .book-list li {
        padding: 10px;
        border-bottom: 1px solid #ccc;
    }

    .book-list li:last-child {
        border-bottom: none;
    }
    </style>
</head>

<body>
    <h1>Sistem Perpustakaan</h1>
    <form action="index.php" method="post">
        <label for="judul">Judul Buku:</label>
        <input type="text" id="judul" name="judul"><br><br>
        <label for="pengarang">Pengarang:</label>
        <input type="text" id="pengarang" name="pengarang"><br><br>
        <label for="tahun_terbit">Tahun Terbit:</label>
        <input type="number" id="tahun_terbit" name="tahun_terbit"><br><br>
        <input type="submit" name="action" value="Tambah Buku">
    </form>
    <ul class="book-list">
        <?php foreach ($controller->library->getBooks() as $book) { ?>
        <li>
            <?= $book->getJudul() ?> oleh <?= $book->getPengarang() ?> (<?= $book->getTahunTerbit() ?>)
        </li>
        <?php } ?>
    </ul>
</body>

</html>