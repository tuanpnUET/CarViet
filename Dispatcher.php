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
        

        if ($url == "/CarViet/")
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
        call_user_func_array([$controller, $this->request->action], $this->request->params);
    }

    public function loadController()
    {
        $name = $this->request->controller . "Controller";

        $file = ROOT . 'Controller/' . $name . '.php';
        // echo $file;
        require($file);
        $controller = new $name();
        return $controller;
    }

    

}
?>