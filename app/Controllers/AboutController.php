<?php
require_once CORE.'/Controller.php';

class AboutController extends Controller
{
    public function index()
    {
        $title = "About Page";
        $this->view->render('about/index', compact('title'));
    }
}