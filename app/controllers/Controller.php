<?php
namespace app\controllers;

use League\Plates\Engine;

abstract class Controller
{

    public function index($data = [], $message = "") {
        if(!is_array($data)) {
            $data = [];
        }

        if(!is_string($message)) {
            $message = "";
        }

        $this->view($this->view, ['title' => $this->title, "data" => $data]);
    }

    protected function view(string $view, array $data = []) {
        $viewPath = "../app/views/".$view.".php";

        if(!file_exists($viewPath)) {
            throw new \Exception(" A view {$view} não existe");
        }

        $templates = new Engine("../app/views");

        echo $templates->render($view, $data);
    }

    abstract protected function getAll();
}