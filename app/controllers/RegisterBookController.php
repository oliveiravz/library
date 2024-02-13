<?php
namespace app\controllers;

use app\controllers\Controller;
use app\core\Request;
use app\models\Book;

class RegisterBookController extends Controller
{
    public function index($message = "") {

        if(!is_string($message)) {
            $message = "";
        }

        $this->view('register', ['title' => 'Cadastrar um livro', 'message' => $message]);
    }

    public function insert() {

        $data = Request::all();
        $book = new Book();

        $registered = $book->insert($data);

        if($registered) {
            $message = "Livro Cadastrado com Sucesso";
        }else{
            $message = "Erro ao cadastrar Livro";
        }

        $this->index($message);
    }   
}