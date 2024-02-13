<?php
namespace app\controllers;

use app\models\Book;

class BookController extends Controller
{
    public function index(array $books = []) {
        $this->view('book', ['title' => 'Livros', "books" => $books]);
    }

    public function getAll() {
        $getAll = new Book();
        
        $books = $getAll->fetchAll();

        $this->index($books);
    }
}