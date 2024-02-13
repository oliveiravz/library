<?php
namespace app\controllers;

use app\controllers\Controller;

class BorrowController extends Controller
{
    public function index() {
        $this->view('borrow', ['title' => 'Emprestar livro']);
    }
}