<?php

class View 
{
    public function render($template, $data = null, $layout='app', $error = false)
    {
        if(!empty($data)) {
            extract($data);
        }
        
        $template .= '.php';
        return require VIEWS."/layouts/${layout}.php";
    }
}