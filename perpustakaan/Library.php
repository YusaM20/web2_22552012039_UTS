<?php

// Library.php
class Library {
    private $books = [];

    public function addBook(Book $book) {
        $this->books[] = $book;
    }

    public function getBooks() {
        return $this->books;
    }
}