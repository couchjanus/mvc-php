<?php
require_once CORE.'/View.php';

class HomeController
{
    public function index()
    {
        $title = "Home Page";
        $view = new View();
        $view->render('home/index', compact('title'));
    }
}