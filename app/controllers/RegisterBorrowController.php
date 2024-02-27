<?php
namespace app\controllers;

use app\controllers\Controller;
use app\core\Request;
use app\models\Book;
use app\models\Borrow;

class RegisterBorrowController extends Controller
{
    protected string $view = "borrow";
    protected string $title = "Livros Emprestados";

    public function insert() {

        $data = Request::all();
        $borrow = new Borrow();

        $formatter = preg_replace('/[^0-9]/', '', $data['cpf']);
        $data['cpf'] = $formatter;
        
        $registered = $borrow->insert($data);

        if($registered) {
            $message = "Livro Emprestado com Sucesso";
        }else{
            $message = "Erro ao Emprestar Livro";
        }

        $this->index([], $message);
    }

    public function getAll() {
        $getAll = new Book();
        
        $books = $getAll->fetchAll();
        dd($books);
        $this->index($books);
    }
}