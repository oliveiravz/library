<?php
namespace app\controllers;

use app\controllers\Controller;
use app\core\Request;
use app\models\Book;

class RegisterBookController extends Controller
{
    protected string $view = "register";
    protected string $title = "Cadastrar Livro";

    public function insert() {

        $data = Request::all();

        $book = new Book();

        $registered = $book->insert($data);

        if($registered) {
            $message = "Livro Cadastrado com Sucesso";
        }else{
            $message = "Erro ao cadastrar Livro";
        }

        return $message;
    }   

    public function getAll() {
        $data = [];

        return $data;
    }
}