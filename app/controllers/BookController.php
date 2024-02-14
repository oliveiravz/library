<?php
namespace app\controllers;

use app\models\Book;

class BookController extends Controller
{
    protected string $view = "book";
    protected string $title = "Livros";

    public function getAll() {
        $getAll = new Book();
        
        $books = $getAll->fetchAll();

        $this->index($books);
    }
}