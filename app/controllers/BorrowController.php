<?php
namespace app\controllers;

use app\models\Borrow;

class BorrowController extends Controller
{
    protected string $view = "borrows";
    protected string $title = "Livros Emprestados";

    public function getAll() {
        $getAll = new Borrow();
        
        $borrows = $getAll->fetchAll();

        $this->index($borrows);
    }
}