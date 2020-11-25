<?php
class Request
    {
        public $url;

        public function __construct()
        {
            $this->url = $_SERVER["REQUEST_URI"];
        }
    }
class Router
{

    static public function parse($url, $request)
    {
        $url = trim($url);

        if (strpos($url, 'BanThuoc_MVC/admin') !== false) {
            $request->isAdmin = true;
            if ($url == "/BanThuoc_MVC/admin/")
            {
                $request->controller = "Home";
                $request->action = "index";
                

                $request->params = [];
            }
            else
            {
                $explode_url = explode('/', $url);
                $explode_url = array_slice($explode_url, 2);
                $request->controller = $explode_url[1];
                $request->action = $explode_url[2];
                $request->params = array_slice($explode_url, 3);
                // echo '<pre>';
                // print_r($request);
            }


        }
        else
        {

            if ($url == "/BanThuoc_MVC/")
            {
                $request->controller = "Home";
                $request->action = "index";
                $request->isAdmin = false;

                $request->params = [];
            }
            else
            {
                $explode_url = explode('/', $url);
                $explode_url = array_slice($explode_url, 2);
                $request->controller = $explode_url[1];
                $request->action = $explode_url[2];
                $request->params = array_slice($explode_url, 3);
            }

        }
        

    }

}
class Dispatcher
{

    private $request;

    public function dispatch()
    {
        $this->request = new Request();//$request->url=$SERVER["request_URI"]
        Router::parse($this->request->url, $this->request);
             $controller = $this->loadController();
             $controller->set($this->request->params);

        call_user_func_array([$controller, $this->request->action], $this->request->params);
    }

    public function loadController()
    {

        $name = $this->request->controller . "Controller";
        if($this->request->isAdmin)
                $file = ROOT . 'Controller/admin/' . $name . '.php';
        else
            $file = ROOT . 'Controller/' . $name . '.php';

        // echo $file;
        require($file);
        $controller = new $name();
        return $controller;
    }

}
?>