<?php
namespace app\controllers;

use app\controllers\Controller;

class HomeController extends Controller
{    
    protected string $view = "home";
    protected string $title = "Biblioteca";

    public function getAll() {
        $data = [];

        return $data;
    }
}