<?php
namespace app\controllers;

class NotFoundController extends Controller 
{
    protected string $view = "notFound";
    protected string $title = "Página não encontrada";

    public function getAll() {
        $data = [];

        return $data;
    }
}