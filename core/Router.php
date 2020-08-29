<?php

class Router 
{
    protected $routes = ROUTES;
    private function getUrl()
    {
		return trim($_SERVER['REQUEST_URI'], '/');
    }
    
    private function inst($controller)
    {
        $path = CONTROLLERS."/".$controller.".php";
        
        if(file_exists($path)){
            include_once $path;
			return new $controller();
        }
    }

    // public function parse()
    // {
    //     switch($this->getUrl()) {
    //         case '':
    //             $controller = $this->inst('HomeController');
    //             $method = 'index';
    //             if(method_exists($controller, $method)){
    //                 $controller->$method();
    //             }
    //             // echo "Home Page";
    //             break;
    //         case 'about':
    //             $controller = $this->inst('AboutController');
    //             $method = 'index';
    //             if(method_exists($controller, $method)){
    //                 $controller->$method();
    //             }
    //             // $controller = new AboutController();
    //             // $controller->index();
    //             // echo "About Page";
    //             break;
    //         default:
    //             echo "404 Page";
    //     }
    // }
    public function parse()
    {
        foreach ($this->routes as $route => $path) {
            if ($route == $this->getUrl()) {
                $controller = $this->inst($path);
                if ($controller){
                    $method = 'index';
                    if(method_exists($controller, $method)){
                        $controller->$method();
                    }    
                    break;
                } else {
                    echo "404 Page";
                }
            }
        }
    }
}